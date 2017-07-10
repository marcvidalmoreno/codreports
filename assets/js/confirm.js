"use strict";

var bootstrapConfirm = (function(_,$) {
    var _deepExtend = function(target, source) {
        for (var prop in source)
            if (typeof target[prop] == 'object')
                _deepExtend(target[prop], source[prop]);
            else
                target[prop] = source[prop];
        return target;
    },

    modalTmpl = _.template('\
        <div class="modal fade" id="bootstrap-confirm">\
            <div class="modal-dialog">\
                <div class="modal-content" style="<% if(styles.content) _.each(styles.content,function(e,i) { %><%=i+":"+e+";"%><% }); %>">\
                    <div class="modal-body" style="<% if(styles.body) _.each(styles.body,function(e,i) { %><%=i+":"+e+";"%><% }); %>">\
                        <div class="row">\
                            <div class="col-xs-3 text-center"><i class="fa <%=clases.icon%>" style="<% if(styles.icon) _.each(styles.icon,function(e,i) { %><%=i+":"+e+";"%><% }) %>"></i></div>\
                            <div class="col-xs-9">\
                                <div class="row">\
                                    <div class="col-xs-12">\
                                        <h3 style="<% if(styles.title) _.each(styles.title,function(e,i) { %><%=i+":"+e+";"%><% }); %>"><%=lang.title%></h3>\
                                        <% if((typeof lang.msg !== "undefined")&&(lang.msg!=="")) { %><p><%=lang.msg%></p><% } %>\
                                        <hr/>\
                                    </div>\
                                    <div class="col-xs-6 text-center">\
                                        <button name="ok" class="btn <%=clases.btnOk%>" data-dismiss="modal"><%=lang.btnOk%></button>\
                                    </div>\
                                    <div class="col-xs-6 text-center">\
                                        <button name="err" class="btn <%=clases.btnErr%>" data-dismiss="modal"><%=lang.btnErr%></button>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                        <div class="row">\
                            <div class="col-xs-12">&nbsp;</div>\
                        </div>\
                    </div>\
                    <div class="modal-footer" style="<% if(styles.footer) _.each(styles.footer,function(e,i) { %><%=i+":"+e+";"%><% }); %>">\
                        <p><%=lang.dismiss%></p>\
                    </div>\
                </div><!-- /.modal-content -->\
            </div><!-- /.modal-dialog -->\
        </div>\
    '),

    defaults = {
        lang: {
            btnOk: "Ok, continue.",
            btnErr: "Wait! no.",
            dismiss: "Press ESC to return back",
            title: "Are you sure?",
            msg: ""
        },

        clases: {
            btnOk: "btn-default",
            btnErr: "btn-primary",
            icon: "fa-question-circle",
        },

        theme: 'dark',
        styles: {}
    },

    themes = {
        dark : {
            clases: {
                btnOk: "btn-danger",
                btnErr: "btn-default"
            },

            styles: {
                footer: {
                    position: "absolute",
                    color: "white",
                    padding: "0px",
                    "margin-top": "0px",
                    "border-top": "none"
                },

                title: {
                    "background-color": "transparent"
                },

                icon: {
                    "font-size": "1em",
                    display: "none",
                    opacity: 0
                },

                body: {
                    padding: "8px"
                },

                content: {
                    "background-color": "rgba(0,0,0,0.6)",
                    color: "white"
                }
            }
        },

        white: {

            styles: {
                footer: {
                    position: "absolute",
                    padding: "0px",
                    "margin-top": "0px",
                    "border-top": "none"
                },

                title: {
                    "background-color": "transparent"
                },

                icon: {
                    "font-size": "1em",
                    display: "none",
                    opacity: 0
                },

                body: {
                    padding: "8px",
                    color: "rgb(54,54,54)"
                },

                content: {
                    color: "white"
                }
            }
        }
    },


    bootstrapConfirm = function(params,callback) {
        var renderData =  $.extend(true, {}, defaults);

        if(renderData.theme in themes) 
            renderData = _deepExtend(renderData,themes[renderData.theme]);
        else
            throw 'Theme '+renderData.theme+' is not available';

        if(typeof params === 'object') {
            renderData = _deepExtend(renderData,params);
        } else if(typeof params === 'string') {
            renderData.lang.title = params;
        }

        var $modal = $(modalTmpl(renderData));


        /* = = = = = = = = EVENTS = = = = = = = = */
        $modal.on('click','button[name=ok]',function() {
            $modal.data('result',true);
        }).on('click','button[name=err]',function() {
            $modal.data('result',false);
        }).on('shown.bs.modal',function() {
            $modal.data('result',false);
            // Icon animation
            var $icon = $modal.find('i.'+renderData.clases.icon);
            $icon.css({
                "line-height": $icon.parent().next().height()+'px',
                "vertical-align": "middle"
            }).show().animate({opacity:1,"font-size":'8em'},150);
        }).on('hidden.bs.modal',function() {
            //console.debug('Confirm result:',$modal.data('result'));
            if(typeof callback === 'function')
                callback($modal.data('result'));
            $modal.remove();
        });

        //console.debug(renderData);
        $modal.modal('show');
    }

    return bootstrapConfirm;
})(_,jQuery)

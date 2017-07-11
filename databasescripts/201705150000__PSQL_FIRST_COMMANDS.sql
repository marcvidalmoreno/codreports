root@marcsupilami:/home/amvi/Documents/projects/codreports# su - postgres
postgres@marcsupilami:~$ history 
    1  psql
    2  psql
    3  cd
    4  psql
    5  psql
    6  createuser --interactive
    7  createdb codreports
    8  createdb codreporter
    9  su - codreporter
   10  echo codreporter:codpassword377 | chpasswd
   11  exit
   12  exit
   13  createdb codreports
   14  exit
   15  history 
postgres@marcsupilami:~$ createuser --interactive
Enter name of role to add: codreports
Shall the new role be a superuser? (y/n) y
postgres@marcsupilami:~$ exit
logout
root@marcsupilami:/home/amvi/Documents/projects/codreports# su - codreports
codreports@marcsupilami:~$ psql
psql (9.4.12)
Type "help" for help.

codreports=# show databases;
ERROR:  unrecognized configuration parameter "databases"
codreports=# exit
codreports-# ;
ERROR:  syntax error at or near "exit"
LINE 1: exit
        ^
codreports=# \q
codreports@marcsupilami:~$ exit
logout
root@marcsupilami:/home/amvi/Documents/projects/codreports# exit
exit
amvi@marcsupilami:~/Documents/projects/codreports$ su
Password: 
root@marcsupilami:/home/amvi/Documents/projects/codreports# exit
exit
amvi@marcsupilami:~/Documents/projects/codreports$ sudo -u postgres psql
[sudo] password for amvi: 
psql (9.4.12)
Type "help" for help.

postgres=# \password 
Enter new password: 
Enter it again: 
postgres=# \q
amvi@marcsupilami:~/Documents/projects/codreports$ sudo -u postgres psql
psql (9.4.12)
Type "help" for help.

postgres=# \cod_committee
Invalid command \cod_committee. Try \? for help.
postgres=# \d cod_committee
Did not find any relation named "cod_committee".
postgres=# show codreports
postgres-# ;
ERROR:  unrecognized configuration parameter "codreports"
postgres=# \d
No relations found.
postgres=# \q
amvi@marcsupilami:~/Documents/projects/codreports$ sudo -u postgres psql
[sudo] password for amvi: 
psql (9.4.12)
Type "help" for help.

postgres=# \d
No relations found.
postgres=# \l
                                  List of databases
    Name    |  Owner   | Encoding |   Collate   |    Ctype    |   Access privileges   
------------+----------+----------+-------------+-------------+-----------------------
 codreports | postgres | UTF8     | en_GB.UTF-8 | en_GB.UTF-8 | 
 postgres   | postgres | UTF8     | en_GB.UTF-8 | en_GB.UTF-8 | 
 template0  | postgres | UTF8     | en_GB.UTF-8 | en_GB.UTF-8 | =c/postgres          +
            |          |          |             |             | postgres=CTc/postgres
 template1  | postgres | UTF8     | en_GB.UTF-8 | en_GB.UTF-8 | =c/postgres          +
            |          |          |             |             | postgres=CTc/postgres
(4 rows)

postgres=# \c codreports
You are now connected to database "codreports" as user "postgres".
codreports=# \l
                                  List of databases
    Name    |  Owner   | Encoding |   Collate   |    Ctype    |   Access privileges   
------------+----------+----------+-------------+-------------+-----------------------
 codreports | postgres | UTF8     | en_GB.UTF-8 | en_GB.UTF-8 | 
 postgres   | postgres | UTF8     | en_GB.UTF-8 | en_GB.UTF-8 | 
 template0  | postgres | UTF8     | en_GB.UTF-8 | en_GB.UTF-8 | =c/postgres          +
            |          |          |             |             | postgres=CTc/postgres
 template1  | postgres | UTF8     | en_GB.UTF-8 | en_GB.UTF-8 | =c/postgres          +
            |          |          |             |             | postgres=CTc/postgres
(4 rows)

codreports=# \r
Query buffer reset (cleared).
codreports=# \d
                       List of relations
 Schema |              Name              |   Type   |  Owner   
--------+--------------------------------+----------+----------
 public | cod_committee                  | table    | postgres
 public | cod_committee_id_committee_seq | sequence | postgres
(2 rows)

codreports=# \d cod_committee
                                           Table "public.cod_committee"
    Column    |            Type             |                              Modifiers                               
--------------+-----------------------------+----------------------------------------------------------------------
 id_committee | integer                     | not null default nextval('cod_committee_id_committee_seq'::regclass)
 code         | character varying(4)        | not null
 name         | character varying(50)       | not null
 created      | timestamp without time zone | default now()
 modified     | timestamp without time zone | 
Indexes:
    "cod_committee_pkey" PRIMARY KEY, btree (id_committee)

codreports=# \d cod_committee
                                           Table "public.cod_committee"
    Column    |            Type             |                              Modifiers                               
--------------+-----------------------------+----------------------------------------------------------------------
 id_committee | integer                     | not null default nextval('cod_committee_id_committee_seq'::regclass)
 code         | character varying(4)        | not null
 name         | character varying(50)       | not null
 created      | timestamp without time zone | default now()
 modified     | timestamp without time zone | 
Indexes:
    "cod_committee_pkey" PRIMARY KEY, btree (id_committee)
Triggers:
    update_cod_committee_modtime BEFORE UPDATE ON cod_committee FOR EACH ROW EXECUTE PROCEDURE update_modified_column()

codreports=# \d cod_session
                                         Table "public.cod_session"
   Column   |            Type             |                            Modifiers                             
------------+-----------------------------+------------------------------------------------------------------
 id_session | integer                     | not null default nextval('cod_session_id_session_seq'::regclass)
 name       | character varying(50)       | not null
 created    | timestamp without time zone | default now()
 modified   | timestamp without time zone | 
Indexes:
    "cod_session_pkey" PRIMARY KEY, btree (id_session)
Triggers:
    update_cod_session_modtime BEFORE UPDATE ON cod_session FOR EACH ROW EXECUTE PROCEDURE update_modified_column()

codreports=# \d cod_report
                                            Table "public.cod_report"
    Column     |            Type             |                             Modifiers                              
---------------+-----------------------------+--------------------------------------------------------------------
 id_cod_report | integer                     | not null default nextval('cod_report_id_cod_report_seq'::regclass)
 id_committee  | integer                     | 
 id_session    | integer                     | 
 title         | character varying(255)      | not null
 created       | timestamp without time zone | default now()
 modified      | timestamp without time zone | 
Indexes:
    "cod_report_pkey" PRIMARY KEY, btree (id_cod_report)
Foreign-key constraints:
    "fk_cod_report_committee" FOREIGN KEY (id_committee) REFERENCES cod_committee(id_committee)
    "fk_cod_report_session" FOREIGN KEY (id_session) REFERENCES cod_session(id_session)
Triggers:
    update_cod_report_modtime BEFORE UPDATE ON cod_report FOR EACH ROW EXECUTE PROCEDURE update_modified_column()


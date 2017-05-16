
/********************************************** RESOURCES *******************************************************************

http://www.the-art-of-web.com/sql/trigger-update-timestamp/
http://www.revsys.com/blog/2006/aug/04/automatically-updating-a-timestamp-column-in-postgresql/
http://stackoverflow.com/questions/9556474/how-do-i-automatically-update-a-timestamp-in-postgresql


*****************************************************************************************************************************/

-- FUNCTION TO UPDATE MODIFIED COLUMN 
CREATE OR REPLACE FUNCTION update_modified_column() 
RETURNS TRIGGER AS $$
BEGIN
    NEW.modified = now();
    RETURN NEW; 
END;
$$ language 'plpgsql';


CREATE FUNCTION password_changed() RETURNS TRIGGER
    LANGUAGE plpgsql
    AS $$
BEGIN
  IF NEW.password != OLD.password THEN
    NEW.password_changed := current_date;
  END IF;
  RETURN NEW;
END;
$$;


CREATE TRIGGER update_customer_modtime BEFORE UPDATE ON customer FOR EACH ROW EXECUTE PROCEDURE  update_modified_column();


-- COD COMMITTEE
CREATE TABLE cod_committee 
(
    id_committee SERIAL PRIMARY KEY,
    code VARCHAR (4) NOT NULL,
    name VARCHAR (50) NOT NULL,
    created timestamp DEFAULT now(),
    modified timestamp
);
CREATE TRIGGER update_cod_committee_modtime BEFORE UPDATE ON cod_committee FOR EACH ROW EXECUTE PROCEDURE  update_modified_column();

-- COD SESSION
CREATE TABLE cod_session (
    id_session SERIAL PRIMARY KEY,
    name VARCHAR (50) NOT NULL,
    created timestamp DEFAULT now(),
    modified timestamp
);
CREATE TRIGGER update_cod_session_modtime BEFORE UPDATE ON cod_session FOR EACH ROW EXECUTE PROCEDURE  update_modified_column();

-- COD REPORT
CREATE TABLE cod_report 
(
    id_cod_report SERIAL PRIMARY KEY,
    id_committee INTEGER,
    id_session INTEGER,
    title VARCHAR (255) NOT NULL,
    created timestamp DEFAULT now(),
    modified timestamp,
    constraint fk_cod_report_committee
        FOREIGN KEY (id_committee) 
        REFERENCES cod_committee(id_committee),
    constraint fk_cod_report_session
        FOREIGN KEY (id_session) 
        REFERENCES cod_session(id_session)
);
CREATE TRIGGER update_cod_report_modtime BEFORE UPDATE ON cod_report FOR EACH ROW EXECUTE PROCEDURE  update_modified_column();


-- INSERTING cod_committee ROWS

-- http://www.europarl.europa.eu/committees/en/parliamentary-committees.html
-- http://www.europarl.europa.eu/committees/en/about-committees.html

INSERT INTO cod_committee (code, name) VALUES
    ('AFET', 'Foreign Affairs'),
    ('DROI', 'Human Rights'),
    ('SEDE', 'Security and Defence'),
    ('DEVE', 'Development'),
    ('INTA', 'International Trade'),
    ('BUDG', 'Budgets'),
    ('CONT', 'Budgetary Control'),
    ('ECON', 'Economic and Monetary Affairs'),
    ('EMPL', 'Employment and Social Affairs'),
    ('ENVI', 'Environment, Public Health and Food Safety'),
    ('ITRE', 'Industry, Research and Energy'),
    ('IMCO', 'Internal Market and Consumer Protection'),
    ('TRAN', 'Transport and Tourism'),
    ('REGI', 'Regional Development'),
    ('AGRI', 'Agriculture and Rural Development'),
    ('PECH', 'Fisheries'),
    ('CULT', 'Culture and Education'),
    ('JURI', 'Legal Affairs'),
    ('LIBE', 'Civil Liberties, Justice and Home Affairs'),
    ('AFCO', 'Constitutional Affairs'),
    ('FEMM', 'Women''s Rights and Gender Equality'),
    ('PETI', 'Petitions');




----------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------

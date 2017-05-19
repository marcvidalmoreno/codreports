
/********************************************** RESOURCES *******************************************************************

IDEAS FOR COD REPORT TITLES SUMMARIZED
http://eur-lex.europa.eu/search.html?type=named&qid=1495154630536&name=summary-eu-legislation:summary-eu-legislation

http://ec.europa.eu/codecision/stepbystep/glossary_en.htm
http://www.europarl.europa.eu/aboutparliament/en/20150201PVL00004/Legislative-powers
http://www.europarl.europa.eu/plenary/en/parliament-positions.html
http://eur-lex.europa.eu/search.html?type=named&qid=1495230138843&name=collection:eu-law-legislation 

*****************************************************************************************************************************/

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


-- INSERTING cod_report ROWS LINKING WITH cod_session and cod_committee

INSERT INTO cod_report (id_committee, id_session, title) VALUES
    (15, 1, 'Organic farming organic production and labelling of the products AGRI Vaia Vaena'),
    (2, 2, 'Protecting personal data when being used by police and criminal justice authorities'),
    (16, 2, 'Fishing in the north-east Atlantic - rules on deep-sea stocks and international waters'),
    (8, 3, 'Strengthening economic and monetary union'),
    (19, 4, 'Children as a focus of EU external action'),
    (4, 4, 'Trade in rough diamonds: implementing the Kimberley Process'),
    (1, 4, 'Preferential EU import tariffs for developing countries'),
    (10, 5, 'International Dolphin Conservation Programme'),
    (1, 6, 'Economic Partnership Agreement between the EU and the Southern African Development Community countries'),
    (10, 6, 'Protecting Europe’s biodiversity (Natura 2000)'),
    (12, 7, 'Financial assistance to Spain'),
    (19, 7, 'Economic governance rules introduced after the financial and economic crisis — a review'),
    (12, 7, 'Empowering businesses and citizens in Europe’s single market'),
    (19, 8, 'Criminal proceedings — procedural safeguards for children who are suspected or accused of crimes'),
    (5, 8, 'EU customs union with Turkey'),
    (17, 8, 'Europeana — showcasing our cultural heritage'),
    (4, 8, 'Trade in rough diamonds: implementing the Kimberley Process'),
    (10, 8, 'Convention on the Protection of the Alps'),
    (19, 9, 'Equal treatment irrespective of racial or ethnic origin'),
    (17, 9, 'EU action for the European Capitals of Culture 2020 to 2033'),
    (10, 10, 'Restrictions on the use of certain hazardous substances in electrical and electronic equipment'),
    (1, 11, 'EU relations with China');

1    "Foreign Affairs"
2    "Human Rights"
3    "Security and Defence"
4    "Development"
5    "International Trade"
6    "Budgets"
7    "Budgetary Control"
8    "Economic and Monetary Affairs"
9    "Employment and Social Affairs"
10   "Environment, Public Health and Food Safety"
11   "Industry, Research and Energy"
12   "Internal Market and Consumer Protection"
13   "Transport and Tourism"
14   "Regional Development"
15   "Agriculture and Rural Development"
16   "Fisheries"
17   "Culture and Education"
18   "Legal Affairs"
19   "Civil Liberties, Justice and Home Affairs"
20   "Constitutional Affairs"
21   "Women's Rights and Gender Equality"
22   "Petitions"





----------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------

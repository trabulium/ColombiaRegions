<?php

$installer = $this;

$installer->startSetup();

$installer->run("
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Amazonas','Amazonas');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Antioquia','Antioquia');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Arauca','Arauca');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Atlántico','Atlántico');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Bolívar','Bolívar');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Boyacá','Boyacá');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Caldas','Caldas');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Caquetá','Caquetá');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Casanare','Casanare');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Cauca','Cauca');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Cesar','Cesar');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Chocó','Chocó');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Córdoba','Córdoba');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Cundinamarca','Cundinamarca');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Guainía','Guainía');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Guaviare','Guaviare');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Huila','Huila');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','La Guajira','La Guajira');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Magdalena','Magdalena');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Meta','Meta');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Nariño','Nariño');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Norte de Santander','Norte de Santander');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Putumayo','Putumayo');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Quindío','Quindío');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Risaralda','Risaralda');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','San Andrés and Providencia  ','San Andrés and Providencia  ');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Santander','Santander');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Sucre','Sucre');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Tolima','Tolima');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Valle del Cauca','Valle del Cauca');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Vaupés','Vaupés');
INSERT INTO {$installer->getTable('directory_country_region')} (country_id,code,default_name) VALUES ('CO','Vichada','Vichada');
");

$installer->endSetup(); 

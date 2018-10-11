------------------------------------------------------------
--        Script Postgre 
------------------------------------------------------------



------------------------------------------------------------
-- Table: Partie
------------------------------------------------------------
CREATE TABLE public.Partie(
	id_partie           SERIAL NOT NULL ,
	date_partie         DATE  NOT NULL ,
	annee_simu_partie   INT  NOT NULL  ,
	CONSTRAINT Partie_PK PRIMARY KEY (id_partie)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: Ville
------------------------------------------------------------
CREATE TABLE public.Ville(
	id_ville             SERIAL NOT NULL ,
	pop_initiale_ville   INT  NOT NULL ,
	tx_natalite_ville    FLOAT  NOT NULL ,
	tx_mortalite_ville   FLOAT  NOT NULL  ,
	CONSTRAINT Ville_PK PRIMARY KEY (id_ville)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: Catastrophe
------------------------------------------------------------
CREATE TABLE public.Catastrophe(
	id_catastrophe     SERIAL NOT NULL ,
	type_catastrophe   VARCHAR (8) NOT NULL  ,
	CONSTRAINT Catastrophe_PK PRIMARY KEY (id_catastrophe)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: Partie_Ville
------------------------------------------------------------
CREATE TABLE public.Partie_Ville(
	id_ville    INT  NOT NULL ,
	id_partie   INT  NOT NULL  ,
	CONSTRAINT Partie_Ville_PK PRIMARY KEY (id_ville,id_partie)

	,CONSTRAINT Partie_Ville_Ville_FK FOREIGN KEY (id_ville) REFERENCES public.Ville(id_ville)
	,CONSTRAINT Partie_Ville_Partie0_FK FOREIGN KEY (id_partie) REFERENCES public.Partie(id_partie)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: Partie_Ville_Catastrophe
------------------------------------------------------------
CREATE TABLE public.Partie_Ville_Catastrophe(
	id_partie             INT  NOT NULL ,
	id_catastrophe        INT  NOT NULL ,
	id_ville              INT  NOT NULL ,
	annee_partvillecata   INT    ,
	CONSTRAINT Partie_Ville_Catastrophe_PK PRIMARY KEY (id_partie,id_catastrophe,id_ville)

	,CONSTRAINT Partie_Ville_Catastrophe_Partie_FK FOREIGN KEY (id_partie) REFERENCES public.Partie(id_partie)
	,CONSTRAINT Partie_Ville_Catastrophe_Catastrophe0_FK FOREIGN KEY (id_catastrophe) REFERENCES public.Catastrophe(id_catastrophe)
	,CONSTRAINT Partie_Ville_Catastrophe_Ville1_FK FOREIGN KEY (id_ville) REFERENCES public.Ville(id_ville)
)WITHOUT OIDS;




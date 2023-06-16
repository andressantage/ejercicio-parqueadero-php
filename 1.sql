CREATE TABLE "Usuarios" (
	"UsuariosID"	TEXT,
	"Nombre"	REAL,
	"Apellido"	TEXT,
	"Fecha_nacimiento"	INTEGER,
	"Correo"	INTEGER,
	"Cedula"	TEXT,
	PRIMARY KEY("UsuariosID")
)

CREATE TABLE "Libros" (
	"LibrosID"	INTEGER,
	"Titulo"	TEXT,
	"Autor"	TEXT,
	"ClasificacionID"	TEXT,
	"Codigo_Autor"	TEXT,
	"Foto"	TEXT,
	"N_Ejemplares"	INTEGER,
	"OrigenID"	INTEGER,
	"N_Disponible"	INTEGER DEFAULT 0,
	"EtiquetaID"	INTEGER,
	"LugarID"	INTEGER,
	"SalaID"	INTEGER,
	"Observacion"	TEXT,
	PRIMARY KEY("LibrosID")
)

CREATE TABLE "LibrosConsulta" (
	"LibrosConsultaID"	INTEGER,
	"LibrosID"	INTEGER,
	PRIMARY KEY("LibrosConsultaID" AUTOINCREMENT)
)
CREATE TABLE "Usuarios" (
	"UsuariosID"	TEXT,
	"Nombre"	REAL,
	"Apellido"	TEXT,
	"Fecha_nacimiento"	INTEGER,
	"Correo"	INTEGER,
	"Cedula"	TEXT,
	PRIMARY KEY("UsuariosID")
)

CREATE TABLE "Sala" (
	"SalaID"	INTEGER,
	"Descripcion"	TEXT,
	PRIMARY KEY("SalaID" AUTOINCREMENT)
)
CREATE TABLE "Etiqueta" (
	"EtiquetaID"	TEXT,
	"Color"	TEXT,
	"Descripción"	TEXT,
	PRIMARY KEY("EtiquetaID")
)
CREATE TABLE "Usuarios" (
	"UsuariosID"	TEXT,
	"Nombre"	REAL,
	"Apellido"	TEXT,
	"Fecha_nA0" TEXT
)
    
CREATE TABLE "Prestamos" (
	"PrestamosID"	INTEGER,
	"LibrosID"	INTEGER,
	"UsuariosID"	INTEGER,
	"Fecha_Prestamo"	INTEGER,
	"Fecha_Limite"	INTEGER,
	"Obervación"	TEXT,
	PRIMARY KEY("PrestamosID" AUTOINCREMENT)
)
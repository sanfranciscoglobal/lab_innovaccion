PGDMP         7                y            thinkia_updated    13.3    13.3 �   "           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            #           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            $           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            %           1262    17923    thinkia_updated    DATABASE     d   CREATE DATABASE thinkia_updated WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.UTF-8';
    DROP DATABASE thinkia_updated;
                postgres    false            �            1259    17924    abreviatura    TABLE     &  CREATE TABLE public.abreviatura (
    id bigint NOT NULL,
    codigo character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.abreviatura;
       public         heap    postgres    false            �            1259    17930    abreviatura_id_seq    SEQUENCE     {   CREATE SEQUENCE public.abreviatura_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.abreviatura_id_seq;
       public          postgres    false    200            &           0    0    abreviatura_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.abreviatura_id_seq OWNED BY public.abreviatura.id;
          public          postgres    false    201            �            1259    17932 	   articulos    TABLE       CREATE TABLE public.articulos (
    id bigint NOT NULL,
    material_id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.articulos;
       public         heap    postgres    false            �            1259    17935    articulos_id_seq    SEQUENCE     y   CREATE SEQUENCE public.articulos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.articulos_id_seq;
       public          postgres    false    202            '           0    0    articulos_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.articulos_id_seq OWNED BY public.articulos.id;
          public          postgres    false    203            �            1259    17937    canton    TABLE     	  CREATE TABLE public.canton (
    id bigint NOT NULL,
    provincia_id bigint,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.canton;
       public         heap    postgres    false            �            1259    17940    canton_id_seq    SEQUENCE     v   CREATE SEQUENCE public.canton_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.canton_id_seq;
       public          postgres    false    204            (           0    0    canton_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.canton_id_seq OWNED BY public.canton.id;
          public          postgres    false    205            �            1259    17942    contacto    TABLE     u  CREATE TABLE public.contacto (
    id bigint NOT NULL,
    name character varying(250) NOT NULL,
    email character varying(250) NOT NULL,
    subject character varying(250) NOT NULL,
    message character varying(250) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.contacto;
       public         heap    postgres    false            �            1259    17948    contacto_id_seq    SEQUENCE     x   CREATE SEQUENCE public.contacto_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.contacto_id_seq;
       public          postgres    false    206            )           0    0    contacto_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.contacto_id_seq OWNED BY public.contacto.id;
          public          postgres    false    207            �            1259    17950    convocatorias    TABLE     �  CREATE TABLE public.convocatorias (
    id bigint NOT NULL,
    tipoconvocatoria_id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    fecha_inicio date NOT NULL,
    fecha_cierre date NOT NULL,
    descripcion text NOT NULL,
    imagen character varying(255) NOT NULL,
    terminos boolean NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 !   DROP TABLE public.convocatorias;
       public         heap    postgres    false            �            1259    17956    convocatorias_id_seq    SEQUENCE     }   CREATE SEQUENCE public.convocatorias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.convocatorias_id_seq;
       public          postgres    false    208            *           0    0    convocatorias_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.convocatorias_id_seq OWNED BY public.convocatorias.id;
          public          postgres    false    209            �            1259    17958    convocatorias_ods    TABLE       CREATE TABLE public.convocatorias_ods (
    id bigint NOT NULL,
    convocatoria_id bigint NOT NULL,
    ods_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 %   DROP TABLE public.convocatorias_ods;
       public         heap    postgres    false            �            1259    17961    convocatorias_ods_id_seq    SEQUENCE     �   CREATE SEQUENCE public.convocatorias_ods_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.convocatorias_ods_id_seq;
       public          postgres    false    210            +           0    0    convocatorias_ods_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.convocatorias_ods_id_seq OWNED BY public.convocatorias_ods.id;
          public          postgres    false    211            �            1259    17963    convocatorias_sectores    TABLE       CREATE TABLE public.convocatorias_sectores (
    id bigint NOT NULL,
    convocatoria_id bigint NOT NULL,
    sector_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 *   DROP TABLE public.convocatorias_sectores;
       public         heap    postgres    false            �            1259    17966    convocatorias_sectores_id_seq    SEQUENCE     �   CREATE SEQUENCE public.convocatorias_sectores_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.convocatorias_sectores_id_seq;
       public          postgres    false    212            ,           0    0    convocatorias_sectores_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.convocatorias_sectores_id_seq OWNED BY public.convocatorias_sectores.id;
          public          postgres    false    213            �            1259    17968    convocatorias_subsectores    TABLE       CREATE TABLE public.convocatorias_subsectores (
    id bigint NOT NULL,
    convocatoria_id bigint NOT NULL,
    subsector_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 -   DROP TABLE public.convocatorias_subsectores;
       public         heap    postgres    false            �            1259    17971     convocatorias_subsectores_id_seq    SEQUENCE     �   CREATE SEQUENCE public.convocatorias_subsectores_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.convocatorias_subsectores_id_seq;
       public          postgres    false    214            -           0    0     convocatorias_subsectores_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.convocatorias_subsectores_id_seq OWNED BY public.convocatorias_subsectores.id;
          public          postgres    false    215            �            1259    17973    estado_registro    TABLE     P  CREATE TABLE public.estado_registro (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    codigo character varying(255) NOT NULL,
    color character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 #   DROP TABLE public.estado_registro;
       public         heap    postgres    false            �            1259    17979    estado_registro_id_seq    SEQUENCE        CREATE SEQUENCE public.estado_registro_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.estado_registro_id_seq;
       public          postgres    false    216            .           0    0    estado_registro_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.estado_registro_id_seq OWNED BY public.estado_registro.id;
          public          postgres    false    217            �            1259    17981    eventos    TABLE     4  CREATE TABLE public.eventos (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    organizador character varying(255) NOT NULL,
    fecha date NOT NULL,
    hora time(0) without time zone NOT NULL,
    imagen character varying(255) NOT NULL,
    descripcion text,
    tipo boolean NOT NULL,
    canton character varying(255),
    area1 character varying(255),
    area2 character varying(255),
    sitioweb character varying(255),
    ubicacion character varying(255),
    org_lat character varying(255),
    org_long character varying(255),
    url text,
    estado boolean DEFAULT true NOT NULL,
    terminos boolean NOT NULL,
    user_id bigint NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.eventos;
       public         heap    postgres    false            /           0    0    COLUMN eventos.tipo    COMMENT     C   COMMENT ON COLUMN public.eventos.tipo IS 'Presencial-1/Virtual-0';
          public          postgres    false    218            0           0    0    COLUMN eventos.estado    COMMENT     B   COMMENT ON COLUMN public.eventos.estado IS 'Publico-1/Privado-0';
          public          postgres    false    218            �            1259    17988    eventos_id_seq    SEQUENCE     w   CREATE SEQUENCE public.eventos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.eventos_id_seq;
       public          postgres    false    218            1           0    0    eventos_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.eventos_id_seq OWNED BY public.eventos.id;
          public          postgres    false    219            �            1259    17990    failed_jobs    TABLE     �   CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    17997    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    220            2           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    221            �            1259    17999    fondos    TABLE     �  CREATE TABLE public.fondos (
    id bigint NOT NULL,
    fuente boolean NOT NULL,
    organizacion character varying(250) NOT NULL,
    nombre_fondo character varying(250),
    info character varying(250) NOT NULL,
    fecha_inicio date,
    fecha_fin date,
    facebook character varying(250),
    instagram character varying(250),
    youtube character varying(250),
    linkedin character varying(250),
    twitter character varying(250),
    imagen character varying(250),
    terminos boolean NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.fondos;
       public         heap    postgres    false            3           0    0    COLUMN fondos.fuente    COMMENT     N   COMMENT ON COLUMN public.fondos.fuente IS '0: otra organizacion, 1: propios';
          public          postgres    false    222            �            1259    18005    fondos_id_seq    SEQUENCE     v   CREATE SEQUENCE public.fondos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.fondos_id_seq;
       public          postgres    false    222            4           0    0    fondos_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.fondos_id_seq OWNED BY public.fondos.id;
          public          postgres    false    223            �            1259    18007    iniciativa_actor    TABLE     j  CREATE TABLE public.iniciativa_actor (
    id bigint NOT NULL,
    nombre_organizacion character varying(250) NOT NULL,
    siglas character varying(50),
    sitio_web character varying(250),
    enfoque text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 $   DROP TABLE public.iniciativa_actor;
       public         heap    postgres    false            �            1259    18013    iniciativa_actor_id_seq    SEQUENCE     �   CREATE SEQUENCE public.iniciativa_actor_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.iniciativa_actor_id_seq;
       public          postgres    false    224            5           0    0    iniciativa_actor_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.iniciativa_actor_id_seq OWNED BY public.iniciativa_actor.id;
          public          postgres    false    225            �            1259    18015    iniciativa_contacto    TABLE     �  CREATE TABLE public.iniciativa_contacto (
    id bigint NOT NULL,
    iniciativa_id bigint NOT NULL,
    nombre_persona character varying(250) NOT NULL,
    celular character varying(50),
    correo_electronico character varying(150) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 '   DROP TABLE public.iniciativa_contacto;
       public         heap    postgres    false            �            1259    18018    iniciativa_contacto_id_seq    SEQUENCE     �   CREATE SEQUENCE public.iniciativa_contacto_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.iniciativa_contacto_id_seq;
       public          postgres    false    226            6           0    0    iniciativa_contacto_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.iniciativa_contacto_id_seq OWNED BY public.iniciativa_contacto.id;
          public          postgres    false    227            �            1259    18020    iniciativa_informacion    TABLE     l  CREATE TABLE public.iniciativa_informacion (
    id bigint NOT NULL,
    nombre_iniciativa character varying(250) NOT NULL,
    anio integer NOT NULL,
    vigencia character varying(10) NOT NULL,
    logo character varying(250) NOT NULL,
    componente_innovador text NOT NULL,
    descripcion_iniciativa text NOT NULL,
    url_facebook character varying(250),
    url_twitter character varying(250),
    url_linkedin character varying(250),
    url_youtube character varying(250),
    url_instagram character varying(250),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.iniciativa_informacion;
       public         heap    postgres    false            �            1259    18026    iniciativa_informacion_id_seq    SEQUENCE     �   CREATE SEQUENCE public.iniciativa_informacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.iniciativa_informacion_id_seq;
       public          postgres    false    228            7           0    0    iniciativa_informacion_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.iniciativa_informacion_id_seq OWNED BY public.iniciativa_informacion.id;
          public          postgres    false    229            �            1259    18028    iniciativa_institucion    TABLE     �   CREATE TABLE public.iniciativa_institucion (
    id bigint NOT NULL,
    iniciativa_id bigint NOT NULL,
    tipo_institucion_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.iniciativa_institucion;
       public         heap    postgres    false            �            1259    18031    iniciativa_institucion_id_seq    SEQUENCE     �   CREATE SEQUENCE public.iniciativa_institucion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.iniciativa_institucion_id_seq;
       public          postgres    false    230            8           0    0    iniciativa_institucion_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.iniciativa_institucion_id_seq OWNED BY public.iniciativa_institucion.id;
          public          postgres    false    231            �            1259    18033    iniciativa_ods    TABLE     �   CREATE TABLE public.iniciativa_ods (
    id bigint NOT NULL,
    iniciativa_id bigint NOT NULL,
    ods_categoria_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.iniciativa_ods;
       public         heap    postgres    false            �            1259    18036    iniciativa_ods_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.iniciativa_ods_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.iniciativa_ods_id_seq;
       public          postgres    false    232            9           0    0    iniciativa_ods_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.iniciativa_ods_id_seq OWNED BY public.iniciativa_ods.id;
          public          postgres    false    233            �            1259    18038    iniciativa_origen    TABLE     1  CREATE TABLE public.iniciativa_origen (
    id bigint NOT NULL,
    descripcion character varying(250) NOT NULL,
    formularios character varying(250) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 %   DROP TABLE public.iniciativa_origen;
       public         heap    postgres    false            �            1259    18044    iniciativa_origen_id_seq    SEQUENCE     �   CREATE SEQUENCE public.iniciativa_origen_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.iniciativa_origen_id_seq;
       public          postgres    false    234            :           0    0    iniciativa_origen_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.iniciativa_origen_id_seq OWNED BY public.iniciativa_origen.id;
          public          postgres    false    235            �            1259    18046    iniciativa_poblacion    TABLE     �   CREATE TABLE public.iniciativa_poblacion (
    id bigint NOT NULL,
    iniciativa_id bigint NOT NULL,
    tipo_poblacion_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 (   DROP TABLE public.iniciativa_poblacion;
       public         heap    postgres    false            �            1259    18049    iniciativa_poblacion_id_seq    SEQUENCE     �   CREATE SEQUENCE public.iniciativa_poblacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.iniciativa_poblacion_id_seq;
       public          postgres    false    236            ;           0    0    iniciativa_poblacion_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.iniciativa_poblacion_id_seq OWNED BY public.iniciativa_poblacion.id;
          public          postgres    false    237            �            1259    18051    iniciativa_ubicacion    TABLE     �  CREATE TABLE public.iniciativa_ubicacion (
    id bigint NOT NULL,
    iniciativa_id bigint NOT NULL,
    canton_id bigint,
    direccion character varying(500) NOT NULL,
    latitud character varying(100),
    longitud character varying(100),
    localidad character varying(100),
    area1 character varying(100),
    area2 character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 (   DROP TABLE public.iniciativa_ubicacion;
       public         heap    postgres    false            �            1259    18057    iniciativa_ubicacion_id_seq    SEQUENCE     �   CREATE SEQUENCE public.iniciativa_ubicacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.iniciativa_ubicacion_id_seq;
       public          postgres    false    238            <           0    0    iniciativa_ubicacion_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.iniciativa_ubicacion_id_seq OWNED BY public.iniciativa_ubicacion.id;
          public          postgres    false    239            �            1259    18059    iniciativas    TABLE     �  CREATE TABLE public.iniciativas (
    id bigint NOT NULL,
    estado_registro_id bigint NOT NULL,
    iniciativa_origen_id bigint NOT NULL,
    iniciativa_actor_id bigint,
    iniciativa_informacion_id bigint NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.iniciativas;
       public         heap    postgres    false            �            1259    18062    iniciativas_id_seq    SEQUENCE     {   CREATE SEQUENCE public.iniciativas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.iniciativas_id_seq;
       public          postgres    false    240            =           0    0    iniciativas_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.iniciativas_id_seq OWNED BY public.iniciativas.id;
          public          postgres    false    241            �            1259    18064    material_categorias    TABLE     )  CREATE TABLE public.material_categorias (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    imagen character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 '   DROP TABLE public.material_categorias;
       public         heap    postgres    false            �            1259    18070    material_categorias_id_seq    SEQUENCE     �   CREATE SEQUENCE public.material_categorias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.material_categorias_id_seq;
       public          postgres    false    242            >           0    0    material_categorias_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.material_categorias_id_seq OWNED BY public.material_categorias.id;
          public          postgres    false    243            �            1259    18072    material_comentarios    TABLE     O  CREATE TABLE public.material_comentarios (
    id bigint NOT NULL,
    comentario text NOT NULL,
    estado boolean DEFAULT true NOT NULL,
    material_id bigint NOT NULL,
    user_id bigint,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 (   DROP TABLE public.material_comentarios;
       public         heap    postgres    false            ?           0    0 "   COLUMN material_comentarios.estado    COMMENT     O   COMMENT ON COLUMN public.material_comentarios.estado IS 'Publico-1/Privado-0';
          public          postgres    false    244            �            1259    18079    material_comentarios_id_seq    SEQUENCE     �   CREATE SEQUENCE public.material_comentarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.material_comentarios_id_seq;
       public          postgres    false    244            @           0    0    material_comentarios_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.material_comentarios_id_seq OWNED BY public.material_comentarios.id;
          public          postgres    false    245            �            1259    18081    material_tipodocumentos    TABLE     7  CREATE TABLE public.material_tipodocumentos (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    tipo smallint,
    imagen character varying(255)
);
 +   DROP TABLE public.material_tipodocumentos;
       public         heap    postgres    false            �            1259    18087    material_tipodocumentos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.material_tipodocumentos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.material_tipodocumentos_id_seq;
       public          postgres    false    246            A           0    0    material_tipodocumentos_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.material_tipodocumentos_id_seq OWNED BY public.material_tipodocumentos.id;
          public          postgres    false    247            �            1259    18089    materialesaprendizaje    TABLE     �  CREATE TABLE public.materialesaprendizaje (
    id bigint NOT NULL,
    nombre_publicacion character varying(255) NOT NULL,
    fecha_publicacion date,
    tema_tratado character varying(255) NOT NULL,
    tipo_documento character varying(255) NOT NULL,
    tipo boolean NOT NULL,
    fuente_publicacion text NOT NULL,
    autor_publicacion character varying(255),
    estado boolean DEFAULT false NOT NULL,
    terminos boolean NOT NULL,
    user_id bigint NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    descripcion_publicacion text
);
 )   DROP TABLE public.materialesaprendizaje;
       public         heap    postgres    false            B           0    0 !   COLUMN materialesaprendizaje.tipo    COMMENT     V   COMMENT ON COLUMN public.materialesaprendizaje.tipo IS 'Publicacion-0/Herramienta-1';
          public          postgres    false    248            C           0    0 #   COLUMN materialesaprendizaje.estado    COMMENT     U   COMMENT ON COLUMN public.materialesaprendizaje.estado IS 'No aprobado-1/Aprobado-0';
          public          postgres    false    248            �            1259    18096    materialesaprendizaje_id_seq    SEQUENCE     �   CREATE SEQUENCE public.materialesaprendizaje_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.materialesaprendizaje_id_seq;
       public          postgres    false    248            D           0    0    materialesaprendizaje_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.materialesaprendizaje_id_seq OWNED BY public.materialesaprendizaje.id;
          public          postgres    false    249            �            1259    18098 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    18101    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    250            E           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    251            �            1259    18103    nivel_solucion    TABLE     �   CREATE TABLE public.nivel_solucion (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 "   DROP TABLE public.nivel_solucion;
       public         heap    postgres    false            �            1259    18106    nivel_solucion_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.nivel_solucion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.nivel_solucion_id_seq;
       public          postgres    false    252            F           0    0    nivel_solucion_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.nivel_solucion_id_seq OWNED BY public.nivel_solucion.id;
          public          postgres    false    253            �            1259    18108    objetivosdesarrollo    TABLE     �   CREATE TABLE public.objetivosdesarrollo (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 '   DROP TABLE public.objetivosdesarrollo;
       public         heap    postgres    false            �            1259    18111    objetivosdesarrollo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.objetivosdesarrollo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.objetivosdesarrollo_id_seq;
       public          postgres    false    254            G           0    0    objetivosdesarrollo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.objetivosdesarrollo_id_seq OWNED BY public.objetivosdesarrollo.id;
          public          postgres    false    255                        1259    18113    ods_categorias    TABLE     2  CREATE TABLE public.ods_categorias (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    descripcion text,
    imagen text,
    orden integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 "   DROP TABLE public.ods_categorias;
       public         heap    postgres    false                       1259    18119    ods_categorias_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.ods_categorias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.ods_categorias_id_seq;
       public          postgres    false    256            H           0    0    ods_categorias_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.ods_categorias_id_seq OWNED BY public.ods_categorias.id;
          public          postgres    false    257                       1259    18121 	   parroquia    TABLE     	  CREATE TABLE public.parroquia (
    id bigint NOT NULL,
    canton_id bigint,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.parroquia;
       public         heap    postgres    false                       1259    18124    parroquia_id_seq    SEQUENCE     y   CREATE SEQUENCE public.parroquia_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.parroquia_id_seq;
       public          postgres    false    258            I           0    0    parroquia_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.parroquia_id_seq OWNED BY public.parroquia.id;
          public          postgres    false    259                       1259    18126    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false                       1259    18132    perfil    TABLE     �  CREATE TABLE public.perfil (
    id bigint NOT NULL,
    celular character varying(255) NOT NULL,
    avatar character varying(200),
    proposito character varying(255) NOT NULL,
    tipo_reg boolean NOT NULL,
    organizacion character varying(255),
    tipo_org character varying(255),
    direccion character varying(255),
    canton_id bigint,
    latitud double precision,
    longitud double precision,
    web character varying(255),
    facebook character varying(250),
    instagram character varying(250),
    linkedin character varying(250),
    twitter character varying(250),
    terminos boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    CONSTRAINT perfil_proposito_check CHECK (((proposito)::text = ANY (ARRAY[('1'::character varying)::text, ('2'::character varying)::text, ('3'::character varying)::text])))
);
    DROP TABLE public.perfil;
       public         heap    postgres    false            J           0    0    COLUMN perfil.proposito    COMMENT     T   COMMENT ON COLUMN public.perfil.proposito IS '1:mapear, 2:compartir, 3:participar';
          public          postgres    false    261            K           0    0    COLUMN perfil.tipo_reg    COMMENT     L   COMMENT ON COLUMN public.perfil.tipo_reg IS '1:individual, 0:organizacion';
          public          postgres    false    261            L           0    0    COLUMN perfil.tipo_org    COMMENT     Y   COMMENT ON COLUMN public.perfil.tipo_org IS '1:academia, 2:privado, 3:publico, 4:civil';
          public          postgres    false    261                       1259    18139    perfil_id_seq    SEQUENCE     v   CREATE SEQUENCE public.perfil_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.perfil_id_seq;
       public          postgres    false    261            M           0    0    perfil_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.perfil_id_seq OWNED BY public.perfil.id;
          public          postgres    false    262                       1259    18141 	   problemas    TABLE     �  CREATE TABLE public.problemas (
    id bigint NOT NULL,
    convocatoria_id bigint NOT NULL,
    tipo_convocatoria_id bigint NOT NULL,
    nombre character varying(150) NOT NULL,
    sector boolean,
    subsector boolean,
    confidencial boolean,
    recomendaciones boolean,
    datos boolean,
    actividad character varying(400),
    problema character varying(500),
    archivo character varying(280),
    causas json,
    efectos json,
    eslabon character varying(255),
    grupo_social character varying(280),
    descripcion_grupo character varying(500),
    keyword json,
    telefono character varying(255),
    web character varying(255),
    facebook character varying(255),
    instagram character varying(255),
    linkedin character varying(255),
    twitter character varying(255),
    youtube character varying(255),
    imagen character varying(280),
    canton_id bigint,
    ubicacion character varying(280),
    latitud double precision,
    longitud double precision,
    terminos boolean,
    user_id bigint,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    CONSTRAINT problemas_eslabon_check CHECK (((eslabon)::text = ANY (ARRAY[('1'::character varying)::text, ('2'::character varying)::text, ('3'::character varying)::text, ('4'::character varying)::text, ('5'::character varying)::text])))
);
    DROP TABLE public.problemas;
       public         heap    postgres    false            N           0    0    COLUMN problemas.eslabon    COMMENT     �   COMMENT ON COLUMN public.problemas.eslabon IS '1:proveedores, 2:insumos, 3:proceso productivo, 4:producto terminado, 5:cliente y mercado';
          public          postgres    false    263                       1259    18148    problemas_id_seq    SEQUENCE     y   CREATE SEQUENCE public.problemas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.problemas_id_seq;
       public          postgres    false    263            O           0    0    problemas_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.problemas_id_seq OWNED BY public.problemas.id;
          public          postgres    false    264            	           1259    18150 	   provincia    TABLE       CREATE TABLE public.provincia (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    region character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.provincia;
       public         heap    postgres    false            
           1259    18156    provincia_id_seq    SEQUENCE     y   CREATE SEQUENCE public.provincia_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.provincia_id_seq;
       public          postgres    false    265            P           0    0    provincia_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.provincia_id_seq OWNED BY public.provincia.id;
          public          postgres    false    266                       1259    18158 	   role_user    TABLE       CREATE TABLE public.role_user (
    id bigint NOT NULL,
    user_id bigint NOT NULL,
    role_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.role_user;
       public         heap    postgres    false                       1259    18161    role_user_id_seq    SEQUENCE     y   CREATE SEQUENCE public.role_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.role_user_id_seq;
       public          postgres    false    267            Q           0    0    role_user_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.role_user_id_seq OWNED BY public.role_user.id;
          public          postgres    false    268                       1259    18163    roles    TABLE       CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    description character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.roles;
       public         heap    postgres    false            R           0    0    COLUMN roles.name    COMMENT     9   COMMENT ON COLUMN public.roles.name IS 'nombre del rol';
          public          postgres    false    269            S           0    0    COLUMN roles.description    COMMENT     E   COMMENT ON COLUMN public.roles.description IS 'descripcion del rol';
          public          postgres    false    269                       1259    18169    roles_id_seq    SEQUENCE     u   CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.roles_id_seq;
       public          postgres    false    269            T           0    0    roles_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;
          public          postgres    false    270                       1259    18171    sector_solucion    TABLE     �   CREATE TABLE public.sector_solucion (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 #   DROP TABLE public.sector_solucion;
       public         heap    postgres    false                       1259    18174    sector_solucion_id_seq    SEQUENCE        CREATE SEQUENCE public.sector_solucion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.sector_solucion_id_seq;
       public          postgres    false    271            U           0    0    sector_solucion_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.sector_solucion_id_seq OWNED BY public.sector_solucion.id;
          public          postgres    false    272                       1259    18176    solucion_comentarios    TABLE     %  CREATE TABLE public.solucion_comentarios (
    id bigint NOT NULL,
    comentario text NOT NULL,
    solucion_id bigint NOT NULL,
    user_id bigint,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 (   DROP TABLE public.solucion_comentarios;
       public         heap    postgres    false                       1259    18182    solucion_comentarios_id_seq    SEQUENCE     �   CREATE SEQUENCE public.solucion_comentarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.solucion_comentarios_id_seq;
       public          postgres    false    273            V           0    0    solucion_comentarios_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.solucion_comentarios_id_seq OWNED BY public.solucion_comentarios.id;
          public          postgres    false    274                       1259    18184    solucion_mejorada    TABLE     !  CREATE TABLE public.solucion_mejorada (
    id bigint NOT NULL,
    descripcion character varying(1000) NOT NULL,
    tiempo character varying(280),
    equipo character varying(1000),
    recursos character varying(1000),
    modelo character varying(1000),
    financiamiento character varying(280),
    archivo character varying(280),
    terminos boolean NOT NULL,
    solucion_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 %   DROP TABLE public.solucion_mejorada;
       public         heap    postgres    false                       1259    18190    solucion_mejorada_id_seq    SEQUENCE     �   CREATE SEQUENCE public.solucion_mejorada_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.solucion_mejorada_id_seq;
       public          postgres    false    275            W           0    0    solucion_mejorada_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.solucion_mejorada_id_seq OWNED BY public.solucion_mejorada.id;
          public          postgres    false    276                       1259    18192    solucion_observaciones    TABLE     X  CREATE TABLE public.solucion_observaciones (
    id bigint NOT NULL,
    viable boolean NOT NULL,
    comentario character varying(255),
    terminos boolean NOT NULL,
    solucion_id bigint NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.solucion_observaciones;
       public         heap    postgres    false                       1259    18195    solucion_observaciones_id_seq    SEQUENCE     �   CREATE SEQUENCE public.solucion_observaciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.solucion_observaciones_id_seq;
       public          postgres    false    277            X           0    0    solucion_observaciones_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.solucion_observaciones_id_seq OWNED BY public.solucion_observaciones.id;
          public          postgres    false    278                       1259    18197    solucion_rating    TABLE        CREATE TABLE public.solucion_rating (
    id bigint NOT NULL,
    rating smallint NOT NULL,
    solucion_id bigint NOT NULL,
    user_id bigint,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 #   DROP TABLE public.solucion_rating;
       public         heap    postgres    false                       1259    18200    solucion_rating_id_seq    SEQUENCE        CREATE SEQUENCE public.solucion_rating_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.solucion_rating_id_seq;
       public          postgres    false    279            Y           0    0    solucion_rating_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.solucion_rating_id_seq OWNED BY public.solucion_rating.id;
          public          postgres    false    280                       1259    18202 
   soluciones    TABLE     W  CREATE TABLE public.soluciones (
    id bigint NOT NULL,
    problema_id bigint NOT NULL,
    sectorsolucion_id bigint NOT NULL,
    nombre character varying(255),
    descripcion text,
    estado_descrip boolean DEFAULT true NOT NULL,
    archivo character varying(255),
    nivelsolucion_id bigint,
    concepto1 character varying(255),
    concepto2 character varying(255),
    concepto3 character varying(255),
    telefono character varying(255),
    web character varying(255),
    facebook character varying(255),
    instagram character varying(255),
    linkededin character varying(255),
    twitter character varying(255),
    youtube character varying(255),
    terminos boolean,
    user_id bigint,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.soluciones;
       public         heap    postgres    false            Z           0    0     COLUMN soluciones.estado_descrip    COMMENT     P   COMMENT ON COLUMN public.soluciones.estado_descrip IS 'Abieta-1/Soloponente-0';
          public          postgres    false    281                       1259    18209    soluciones_id_seq    SEQUENCE     z   CREATE SEQUENCE public.soluciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.soluciones_id_seq;
       public          postgres    false    281            [           0    0    soluciones_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.soluciones_id_seq OWNED BY public.soluciones.id;
          public          postgres    false    282                       1259    18211    soluciontipoinnovas    TABLE       CREATE TABLE public.soluciontipoinnovas (
    id bigint NOT NULL,
    solucion_id bigint NOT NULL,
    tipoinnovacion_id bigint NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 '   DROP TABLE public.soluciontipoinnovas;
       public         heap    postgres    false                       1259    18214    soluciontipoinnovas_id_seq    SEQUENCE     �   CREATE SEQUENCE public.soluciontipoinnovas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.soluciontipoinnovas_id_seq;
       public          postgres    false    283            \           0    0    soluciontipoinnovas_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.soluciontipoinnovas_id_seq OWNED BY public.soluciontipoinnovas.id;
          public          postgres    false    284                       1259    18216    tipo_convocatoria    TABLE     �   CREATE TABLE public.tipo_convocatoria (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 %   DROP TABLE public.tipo_convocatoria;
       public         heap    postgres    false                       1259    18219    tipo_convocatoria_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tipo_convocatoria_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.tipo_convocatoria_id_seq;
       public          postgres    false    285            ]           0    0    tipo_convocatoria_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.tipo_convocatoria_id_seq OWNED BY public.tipo_convocatoria.id;
          public          postgres    false    286                       1259    18221    tipo_institucion    TABLE     �   CREATE TABLE public.tipo_institucion (
    id bigint NOT NULL,
    descripcion character varying(250) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 $   DROP TABLE public.tipo_institucion;
       public         heap    postgres    false                        1259    18224    tipo_institucion_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tipo_institucion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.tipo_institucion_id_seq;
       public          postgres    false    287            ^           0    0    tipo_institucion_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.tipo_institucion_id_seq OWNED BY public.tipo_institucion.id;
          public          postgres    false    288            !           1259    18226    tipo_poblacion    TABLE     �   CREATE TABLE public.tipo_poblacion (
    id bigint NOT NULL,
    descripcion character varying(250) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 "   DROP TABLE public.tipo_poblacion;
       public         heap    postgres    false            "           1259    18229    tipo_poblacion_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.tipo_poblacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tipo_poblacion_id_seq;
       public          postgres    false    289            _           0    0    tipo_poblacion_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.tipo_poblacion_id_seq OWNED BY public.tipo_poblacion.id;
          public          postgres    false    290            #           1259    18231    tipo_propuestas    TABLE     �   CREATE TABLE public.tipo_propuestas (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 #   DROP TABLE public.tipo_propuestas;
       public         heap    postgres    false            $           1259    18234    tipo_propuestas_id_seq    SEQUENCE        CREATE SEQUENCE public.tipo_propuestas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.tipo_propuestas_id_seq;
       public          postgres    false    291            `           0    0    tipo_propuestas_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.tipo_propuestas_id_seq OWNED BY public.tipo_propuestas.id;
          public          postgres    false    292            %           1259    18236    tipo_sector    TABLE       CREATE TABLE public.tipo_sector (
    id bigint NOT NULL,
    convocatoria_id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.tipo_sector;
       public         heap    postgres    false            &           1259    18239    tipo_sector_id_seq    SEQUENCE     {   CREATE SEQUENCE public.tipo_sector_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.tipo_sector_id_seq;
       public          postgres    false    293            a           0    0    tipo_sector_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.tipo_sector_id_seq OWNED BY public.tipo_sector.id;
          public          postgres    false    294            '           1259    18241    tipo_subsector    TABLE       CREATE TABLE public.tipo_subsector (
    id bigint NOT NULL,
    sector_id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 "   DROP TABLE public.tipo_subsector;
       public         heap    postgres    false            (           1259    18244    tipo_subsector_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.tipo_subsector_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tipo_subsector_id_seq;
       public          postgres    false    295            b           0    0    tipo_subsector_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.tipo_subsector_id_seq OWNED BY public.tipo_subsector.id;
          public          postgres    false    296            )           1259    18246    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    perfil_id bigint,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    verification_token character varying(255),
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            *           1259    18252    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    297            c           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    298            j           2604    18254    abreviatura id    DEFAULT     p   ALTER TABLE ONLY public.abreviatura ALTER COLUMN id SET DEFAULT nextval('public.abreviatura_id_seq'::regclass);
 =   ALTER TABLE public.abreviatura ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    201    200            k           2604    18255    articulos id    DEFAULT     l   ALTER TABLE ONLY public.articulos ALTER COLUMN id SET DEFAULT nextval('public.articulos_id_seq'::regclass);
 ;   ALTER TABLE public.articulos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    202            l           2604    18256 	   canton id    DEFAULT     f   ALTER TABLE ONLY public.canton ALTER COLUMN id SET DEFAULT nextval('public.canton_id_seq'::regclass);
 8   ALTER TABLE public.canton ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    205    204            m           2604    18257    contacto id    DEFAULT     j   ALTER TABLE ONLY public.contacto ALTER COLUMN id SET DEFAULT nextval('public.contacto_id_seq'::regclass);
 :   ALTER TABLE public.contacto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    207    206            n           2604    18258    convocatorias id    DEFAULT     t   ALTER TABLE ONLY public.convocatorias ALTER COLUMN id SET DEFAULT nextval('public.convocatorias_id_seq'::regclass);
 ?   ALTER TABLE public.convocatorias ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    208            o           2604    18259    convocatorias_ods id    DEFAULT     |   ALTER TABLE ONLY public.convocatorias_ods ALTER COLUMN id SET DEFAULT nextval('public.convocatorias_ods_id_seq'::regclass);
 C   ALTER TABLE public.convocatorias_ods ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    210            p           2604    18260    convocatorias_sectores id    DEFAULT     �   ALTER TABLE ONLY public.convocatorias_sectores ALTER COLUMN id SET DEFAULT nextval('public.convocatorias_sectores_id_seq'::regclass);
 H   ALTER TABLE public.convocatorias_sectores ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    213    212            q           2604    18261    convocatorias_subsectores id    DEFAULT     �   ALTER TABLE ONLY public.convocatorias_subsectores ALTER COLUMN id SET DEFAULT nextval('public.convocatorias_subsectores_id_seq'::regclass);
 K   ALTER TABLE public.convocatorias_subsectores ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214            r           2604    18262    estado_registro id    DEFAULT     x   ALTER TABLE ONLY public.estado_registro ALTER COLUMN id SET DEFAULT nextval('public.estado_registro_id_seq'::regclass);
 A   ALTER TABLE public.estado_registro ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    216            t           2604    18263 
   eventos id    DEFAULT     h   ALTER TABLE ONLY public.eventos ALTER COLUMN id SET DEFAULT nextval('public.eventos_id_seq'::regclass);
 9   ALTER TABLE public.eventos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    218            v           2604    18264    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    220            w           2604    18265 	   fondos id    DEFAULT     f   ALTER TABLE ONLY public.fondos ALTER COLUMN id SET DEFAULT nextval('public.fondos_id_seq'::regclass);
 8   ALTER TABLE public.fondos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222            x           2604    18266    iniciativa_actor id    DEFAULT     z   ALTER TABLE ONLY public.iniciativa_actor ALTER COLUMN id SET DEFAULT nextval('public.iniciativa_actor_id_seq'::regclass);
 B   ALTER TABLE public.iniciativa_actor ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224            y           2604    18267    iniciativa_contacto id    DEFAULT     �   ALTER TABLE ONLY public.iniciativa_contacto ALTER COLUMN id SET DEFAULT nextval('public.iniciativa_contacto_id_seq'::regclass);
 E   ALTER TABLE public.iniciativa_contacto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226            z           2604    18268    iniciativa_informacion id    DEFAULT     �   ALTER TABLE ONLY public.iniciativa_informacion ALTER COLUMN id SET DEFAULT nextval('public.iniciativa_informacion_id_seq'::regclass);
 H   ALTER TABLE public.iniciativa_informacion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    229    228            {           2604    18269    iniciativa_institucion id    DEFAULT     �   ALTER TABLE ONLY public.iniciativa_institucion ALTER COLUMN id SET DEFAULT nextval('public.iniciativa_institucion_id_seq'::regclass);
 H   ALTER TABLE public.iniciativa_institucion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    230            |           2604    18270    iniciativa_ods id    DEFAULT     v   ALTER TABLE ONLY public.iniciativa_ods ALTER COLUMN id SET DEFAULT nextval('public.iniciativa_ods_id_seq'::regclass);
 @   ALTER TABLE public.iniciativa_ods ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    232            }           2604    18271    iniciativa_origen id    DEFAULT     |   ALTER TABLE ONLY public.iniciativa_origen ALTER COLUMN id SET DEFAULT nextval('public.iniciativa_origen_id_seq'::regclass);
 C   ALTER TABLE public.iniciativa_origen ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    234            ~           2604    18272    iniciativa_poblacion id    DEFAULT     �   ALTER TABLE ONLY public.iniciativa_poblacion ALTER COLUMN id SET DEFAULT nextval('public.iniciativa_poblacion_id_seq'::regclass);
 F   ALTER TABLE public.iniciativa_poblacion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    236                       2604    18273    iniciativa_ubicacion id    DEFAULT     �   ALTER TABLE ONLY public.iniciativa_ubicacion ALTER COLUMN id SET DEFAULT nextval('public.iniciativa_ubicacion_id_seq'::regclass);
 F   ALTER TABLE public.iniciativa_ubicacion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    239    238            �           2604    18274    iniciativas id    DEFAULT     p   ALTER TABLE ONLY public.iniciativas ALTER COLUMN id SET DEFAULT nextval('public.iniciativas_id_seq'::regclass);
 =   ALTER TABLE public.iniciativas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    241    240            �           2604    18275    material_categorias id    DEFAULT     �   ALTER TABLE ONLY public.material_categorias ALTER COLUMN id SET DEFAULT nextval('public.material_categorias_id_seq'::regclass);
 E   ALTER TABLE public.material_categorias ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    243    242            �           2604    18276    material_comentarios id    DEFAULT     �   ALTER TABLE ONLY public.material_comentarios ALTER COLUMN id SET DEFAULT nextval('public.material_comentarios_id_seq'::regclass);
 F   ALTER TABLE public.material_comentarios ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    245    244            �           2604    18277    material_tipodocumentos id    DEFAULT     �   ALTER TABLE ONLY public.material_tipodocumentos ALTER COLUMN id SET DEFAULT nextval('public.material_tipodocumentos_id_seq'::regclass);
 I   ALTER TABLE public.material_tipodocumentos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    247    246            �           2604    18278    materialesaprendizaje id    DEFAULT     �   ALTER TABLE ONLY public.materialesaprendizaje ALTER COLUMN id SET DEFAULT nextval('public.materialesaprendizaje_id_seq'::regclass);
 G   ALTER TABLE public.materialesaprendizaje ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    249    248            �           2604    18279    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    251    250            �           2604    18280    nivel_solucion id    DEFAULT     v   ALTER TABLE ONLY public.nivel_solucion ALTER COLUMN id SET DEFAULT nextval('public.nivel_solucion_id_seq'::regclass);
 @   ALTER TABLE public.nivel_solucion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    253    252            �           2604    18281    objetivosdesarrollo id    DEFAULT     �   ALTER TABLE ONLY public.objetivosdesarrollo ALTER COLUMN id SET DEFAULT nextval('public.objetivosdesarrollo_id_seq'::regclass);
 E   ALTER TABLE public.objetivosdesarrollo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    255    254            �           2604    18282    ods_categorias id    DEFAULT     v   ALTER TABLE ONLY public.ods_categorias ALTER COLUMN id SET DEFAULT nextval('public.ods_categorias_id_seq'::regclass);
 @   ALTER TABLE public.ods_categorias ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    257    256            �           2604    18283    parroquia id    DEFAULT     l   ALTER TABLE ONLY public.parroquia ALTER COLUMN id SET DEFAULT nextval('public.parroquia_id_seq'::regclass);
 ;   ALTER TABLE public.parroquia ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    259    258            �           2604    18284 	   perfil id    DEFAULT     f   ALTER TABLE ONLY public.perfil ALTER COLUMN id SET DEFAULT nextval('public.perfil_id_seq'::regclass);
 8   ALTER TABLE public.perfil ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    262    261            �           2604    18285    problemas id    DEFAULT     l   ALTER TABLE ONLY public.problemas ALTER COLUMN id SET DEFAULT nextval('public.problemas_id_seq'::regclass);
 ;   ALTER TABLE public.problemas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    264    263            �           2604    18286    provincia id    DEFAULT     l   ALTER TABLE ONLY public.provincia ALTER COLUMN id SET DEFAULT nextval('public.provincia_id_seq'::regclass);
 ;   ALTER TABLE public.provincia ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    266    265            �           2604    18287    role_user id    DEFAULT     l   ALTER TABLE ONLY public.role_user ALTER COLUMN id SET DEFAULT nextval('public.role_user_id_seq'::regclass);
 ;   ALTER TABLE public.role_user ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    268    267            �           2604    18288    roles id    DEFAULT     d   ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);
 7   ALTER TABLE public.roles ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    270    269            �           2604    18289    sector_solucion id    DEFAULT     x   ALTER TABLE ONLY public.sector_solucion ALTER COLUMN id SET DEFAULT nextval('public.sector_solucion_id_seq'::regclass);
 A   ALTER TABLE public.sector_solucion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    272    271            �           2604    18290    solucion_comentarios id    DEFAULT     �   ALTER TABLE ONLY public.solucion_comentarios ALTER COLUMN id SET DEFAULT nextval('public.solucion_comentarios_id_seq'::regclass);
 F   ALTER TABLE public.solucion_comentarios ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    274    273            �           2604    18291    solucion_mejorada id    DEFAULT     |   ALTER TABLE ONLY public.solucion_mejorada ALTER COLUMN id SET DEFAULT nextval('public.solucion_mejorada_id_seq'::regclass);
 C   ALTER TABLE public.solucion_mejorada ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    276    275            �           2604    18292    solucion_observaciones id    DEFAULT     �   ALTER TABLE ONLY public.solucion_observaciones ALTER COLUMN id SET DEFAULT nextval('public.solucion_observaciones_id_seq'::regclass);
 H   ALTER TABLE public.solucion_observaciones ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    278    277            �           2604    18293    solucion_rating id    DEFAULT     x   ALTER TABLE ONLY public.solucion_rating ALTER COLUMN id SET DEFAULT nextval('public.solucion_rating_id_seq'::regclass);
 A   ALTER TABLE public.solucion_rating ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    280    279            �           2604    18294    soluciones id    DEFAULT     n   ALTER TABLE ONLY public.soluciones ALTER COLUMN id SET DEFAULT nextval('public.soluciones_id_seq'::regclass);
 <   ALTER TABLE public.soluciones ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    282    281            �           2604    18295    soluciontipoinnovas id    DEFAULT     �   ALTER TABLE ONLY public.soluciontipoinnovas ALTER COLUMN id SET DEFAULT nextval('public.soluciontipoinnovas_id_seq'::regclass);
 E   ALTER TABLE public.soluciontipoinnovas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    284    283            �           2604    18296    tipo_convocatoria id    DEFAULT     |   ALTER TABLE ONLY public.tipo_convocatoria ALTER COLUMN id SET DEFAULT nextval('public.tipo_convocatoria_id_seq'::regclass);
 C   ALTER TABLE public.tipo_convocatoria ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    286    285            �           2604    18297    tipo_institucion id    DEFAULT     z   ALTER TABLE ONLY public.tipo_institucion ALTER COLUMN id SET DEFAULT nextval('public.tipo_institucion_id_seq'::regclass);
 B   ALTER TABLE public.tipo_institucion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    288    287            �           2604    18298    tipo_poblacion id    DEFAULT     v   ALTER TABLE ONLY public.tipo_poblacion ALTER COLUMN id SET DEFAULT nextval('public.tipo_poblacion_id_seq'::regclass);
 @   ALTER TABLE public.tipo_poblacion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    290    289            �           2604    18299    tipo_propuestas id    DEFAULT     x   ALTER TABLE ONLY public.tipo_propuestas ALTER COLUMN id SET DEFAULT nextval('public.tipo_propuestas_id_seq'::regclass);
 A   ALTER TABLE public.tipo_propuestas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    292    291            �           2604    18300    tipo_sector id    DEFAULT     p   ALTER TABLE ONLY public.tipo_sector ALTER COLUMN id SET DEFAULT nextval('public.tipo_sector_id_seq'::regclass);
 =   ALTER TABLE public.tipo_sector ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    294    293            �           2604    18301    tipo_subsector id    DEFAULT     v   ALTER TABLE ONLY public.tipo_subsector ALTER COLUMN id SET DEFAULT nextval('public.tipo_subsector_id_seq'::regclass);
 @   ALTER TABLE public.tipo_subsector ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    296    295            �           2604    18302    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    298    297            �          0    17924    abreviatura 
   TABLE DATA           b   COPY public.abreviatura (id, codigo, descripcion, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    200   �+      �          0    17932 	   articulos 
   TABLE DATA           `   COPY public.articulos (id, material_id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    202   �+      �          0    17937    canton 
   TABLE DATA           ^   COPY public.canton (id, provincia_id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    204   }@      �          0    17942    contacto 
   TABLE DATA           i   COPY public.contacto (id, name, email, subject, message, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    206   I      �          0    17950    convocatorias 
   TABLE DATA           �   COPY public.convocatorias (id, tipoconvocatoria_id, nombre, fecha_inicio, fecha_cierre, descripcion, imagen, terminos, user_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    208   #I      �          0    17958    convocatorias_ods 
   TABLE DATA           l   COPY public.convocatorias_ods (id, convocatoria_id, ods_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    210   bO      �          0    17963    convocatorias_sectores 
   TABLE DATA           t   COPY public.convocatorias_sectores (id, convocatoria_id, sector_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    212   �P      �          0    17968    convocatorias_subsectores 
   TABLE DATA           z   COPY public.convocatorias_subsectores (id, convocatoria_id, subsector_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    214   �Q      �          0    17973    estado_registro 
   TABLE DATA           h   COPY public.estado_registro (id, nombre, codigo, color, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    216   �R      �          0    17981    eventos 
   TABLE DATA           �   COPY public.eventos (id, nombre, organizador, fecha, hora, imagen, descripcion, tipo, canton, area1, area2, sitioweb, ubicacion, org_lat, org_long, url, estado, terminos, user_id, deleted_at, created_at, updated_at) FROM stdin;
    public          postgres    false    218   ES      �          0    17990    failed_jobs 
   TABLE DATA           [   COPY public.failed_jobs (id, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    220   ˢ      �          0    17999    fondos 
   TABLE DATA           �   COPY public.fondos (id, fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    222   �      �          0    18007    iniciativa_actor 
   TABLE DATA           �   COPY public.iniciativa_actor (id, nombre_organizacion, siglas, sitio_web, enfoque, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    224   #�      �          0    18015    iniciativa_contacto 
   TABLE DATA           �   COPY public.iniciativa_contacto (id, iniciativa_id, nombre_persona, celular, correo_electronico, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    226   �H      �          0    18020    iniciativa_informacion 
   TABLE DATA           �   COPY public.iniciativa_informacion (id, nombre_iniciativa, anio, vigencia, logo, componente_innovador, descripcion_iniciativa, url_facebook, url_twitter, url_linkedin, url_youtube, url_instagram, created_at, updated_at) FROM stdin;
    public          postgres    false    228   �m      �          0    18028    iniciativa_institucion 
   TABLE DATA           p   COPY public.iniciativa_institucion (id, iniciativa_id, tipo_institucion_id, created_at, updated_at) FROM stdin;
    public          postgres    false    230   ��      �          0    18033    iniciativa_ods 
   TABLE DATA           e   COPY public.iniciativa_ods (id, iniciativa_id, ods_categoria_id, created_at, updated_at) FROM stdin;
    public          postgres    false    232   �      �          0    18038    iniciativa_origen 
   TABLE DATA           m   COPY public.iniciativa_origen (id, descripcion, formularios, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    234   *�      �          0    18046    iniciativa_poblacion 
   TABLE DATA           l   COPY public.iniciativa_poblacion (id, iniciativa_id, tipo_poblacion_id, created_at, updated_at) FROM stdin;
    public          postgres    false    236   ��      �          0    18051    iniciativa_ubicacion 
   TABLE DATA           �   COPY public.iniciativa_ubicacion (id, iniciativa_id, canton_id, direccion, latitud, longitud, localidad, area1, area2, created_at, updated_at) FROM stdin;
    public          postgres    false    238   "�      �          0    18059    iniciativas 
   TABLE DATA           �   COPY public.iniciativas (id, estado_registro_id, iniciativa_origen_id, iniciativa_actor_id, iniciativa_informacion_id, user_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    240   O�      �          0    18064    material_categorias 
   TABLE DATA           e   COPY public.material_categorias (id, nombre, imagen, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    242   �      �          0    18072    material_comentarios 
   TABLE DATA           �   COPY public.material_comentarios (id, comentario, estado, material_id, user_id, deleted_at, created_at, updated_at) FROM stdin;
    public          postgres    false    244   $      �          0    18081    material_tipodocumentos 
   TABLE DATA           o   COPY public.material_tipodocumentos (id, nombre, created_at, updated_at, deleted_at, tipo, imagen) FROM stdin;
    public          postgres    false    246   A      �          0    18089    materialesaprendizaje 
   TABLE DATA           �   COPY public.materialesaprendizaje (id, nombre_publicacion, fecha_publicacion, tema_tratado, tipo_documento, tipo, fuente_publicacion, autor_publicacion, estado, terminos, user_id, deleted_at, created_at, updated_at, descripcion_publicacion) FROM stdin;
    public          postgres    false    248   j      �          0    18098 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    250   ��      �          0    18103    nivel_solucion 
   TABLE DATA           X   COPY public.nivel_solucion (id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    252   [�      �          0    18108    objetivosdesarrollo 
   TABLE DATA           ]   COPY public.objetivosdesarrollo (id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    254   ��      �          0    18113    ods_categorias 
   TABLE DATA           t   COPY public.ods_categorias (id, nombre, descripcion, imagen, orden, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    256   �      �          0    18121 	   parroquia 
   TABLE DATA           ^   COPY public.parroquia (id, canton_id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    258   غ      �          0    18126    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    260   ��      �          0    18132    perfil 
   TABLE DATA           �   COPY public.perfil (id, celular, avatar, proposito, tipo_reg, organizacion, tipo_org, direccion, canton_id, latitud, longitud, web, facebook, instagram, linkedin, twitter, terminos, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    261   �      �          0    18141 	   problemas 
   TABLE DATA           �  COPY public.problemas (id, convocatoria_id, tipo_convocatoria_id, nombre, sector, subsector, confidencial, recomendaciones, datos, actividad, problema, archivo, causas, efectos, eslabon, grupo_social, descripcion_grupo, keyword, telefono, web, facebook, instagram, linkedin, twitter, youtube, imagen, canton_id, ubicacion, latitud, longitud, terminos, user_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    263   ��      �          0    18150 	   provincia 
   TABLE DATA           [   COPY public.provincia (id, nombre, region, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    265   ��                 0    18158 	   role_user 
   TABLE DATA           ]   COPY public.role_user (id, user_id, role_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    267   E�                0    18163    roles 
   TABLE DATA           Z   COPY public.roles (id, name, description, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    269   )�                0    18171    sector_solucion 
   TABLE DATA           Y   COPY public.sector_solucion (id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    271   ��                0    18176    solucion_comentarios 
   TABLE DATA           x   COPY public.solucion_comentarios (id, comentario, solucion_id, user_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    273   a�                0    18184    solucion_mejorada 
   TABLE DATA           �   COPY public.solucion_mejorada (id, descripcion, tiempo, equipo, recursos, modelo, financiamiento, archivo, terminos, solucion_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    275   ��      
          0    18192    solucion_observaciones 
   TABLE DATA           �   COPY public.solucion_observaciones (id, viable, comentario, terminos, solucion_id, deleted_at, created_at, updated_at) FROM stdin;
    public          postgres    false    277   ��                0    18197    solucion_rating 
   TABLE DATA           o   COPY public.solucion_rating (id, rating, solucion_id, user_id, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    279   n�                0    18202 
   soluciones 
   TABLE DATA           "  COPY public.soluciones (id, problema_id, sectorsolucion_id, nombre, descripcion, estado_descrip, archivo, nivelsolucion_id, concepto1, concepto2, concepto3, telefono, web, facebook, instagram, linkededin, twitter, youtube, terminos, user_id, deleted_at, created_at, updated_at) FROM stdin;
    public          postgres    false    281   ��                0    18211    soluciontipoinnovas 
   TABLE DATA           u   COPY public.soluciontipoinnovas (id, solucion_id, tipoinnovacion_id, deleted_at, created_at, updated_at) FROM stdin;
    public          postgres    false    283   ��                0    18216    tipo_convocatoria 
   TABLE DATA           [   COPY public.tipo_convocatoria (id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    285   H�                0    18221    tipo_institucion 
   TABLE DATA           _   COPY public.tipo_institucion (id, descripcion, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    287   ��                0    18226    tipo_poblacion 
   TABLE DATA           ]   COPY public.tipo_poblacion (id, descripcion, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    289   �                0    18231    tipo_propuestas 
   TABLE DATA           Y   COPY public.tipo_propuestas (id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    291   ��                0    18236    tipo_sector 
   TABLE DATA           f   COPY public.tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    293   u�                0    18241    tipo_subsector 
   TABLE DATA           c   COPY public.tipo_subsector (id, sector_id, nombre, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    295   #�                0    18246    users 
   TABLE DATA           �   COPY public.users (id, perfil_id, name, email, email_verified_at, password, verification_token, remember_token, created_at, updated_at, deleted_at) FROM stdin;
    public          postgres    false    297   p      d           0    0    abreviatura_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.abreviatura_id_seq', 1, false);
          public          postgres    false    201            e           0    0    articulos_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.articulos_id_seq', 95, true);
          public          postgres    false    203            f           0    0    canton_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.canton_id_seq', 1, false);
          public          postgres    false    205            g           0    0    contacto_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.contacto_id_seq', 1, false);
          public          postgres    false    207            h           0    0    convocatorias_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.convocatorias_id_seq', 6, true);
          public          postgres    false    209            i           0    0    convocatorias_ods_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.convocatorias_ods_id_seq', 34, true);
          public          postgres    false    211            j           0    0    convocatorias_sectores_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.convocatorias_sectores_id_seq', 16, true);
          public          postgres    false    213            k           0    0     convocatorias_subsectores_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.convocatorias_subsectores_id_seq', 21, true);
          public          postgres    false    215            l           0    0    estado_registro_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.estado_registro_id_seq', 5, true);
          public          postgres    false    217            m           0    0    eventos_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.eventos_id_seq', 80, true);
          public          postgres    false    219            n           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    221            o           0    0    fondos_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.fondos_id_seq', 70, true);
          public          postgres    false    223            p           0    0    iniciativa_actor_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.iniciativa_actor_id_seq', 341, true);
          public          postgres    false    225            q           0    0    iniciativa_contacto_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.iniciativa_contacto_id_seq', 714, true);
          public          postgres    false    227            r           0    0    iniciativa_informacion_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.iniciativa_informacion_id_seq', 375, true);
          public          postgres    false    229            s           0    0    iniciativa_institucion_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.iniciativa_institucion_id_seq', 708, true);
          public          postgres    false    231            t           0    0    iniciativa_ods_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.iniciativa_ods_id_seq', 1511, true);
          public          postgres    false    233            u           0    0    iniciativa_origen_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.iniciativa_origen_id_seq', 2, true);
          public          postgres    false    235            v           0    0    iniciativa_poblacion_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.iniciativa_poblacion_id_seq', 941, true);
          public          postgres    false    237            w           0    0    iniciativa_ubicacion_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.iniciativa_ubicacion_id_seq', 727, true);
          public          postgres    false    239            x           0    0    iniciativas_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.iniciativas_id_seq', 375, true);
          public          postgres    false    241            y           0    0    material_categorias_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.material_categorias_id_seq', 29, true);
          public          postgres    false    243            z           0    0    material_comentarios_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.material_comentarios_id_seq', 1, false);
          public          postgres    false    245            {           0    0    material_tipodocumentos_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.material_tipodocumentos_id_seq', 16, true);
          public          postgres    false    247            |           0    0    materialesaprendizaje_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.materialesaprendizaje_id_seq', 163, true);
          public          postgres    false    249            }           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 51, true);
          public          postgres    false    251            ~           0    0    nivel_solucion_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.nivel_solucion_id_seq', 5, true);
          public          postgres    false    253                       0    0    objetivosdesarrollo_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.objetivosdesarrollo_id_seq', 1, false);
          public          postgres    false    255            �           0    0    ods_categorias_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.ods_categorias_id_seq', 17, true);
          public          postgres    false    257            �           0    0    parroquia_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.parroquia_id_seq', 1, false);
          public          postgres    false    259            �           0    0    perfil_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.perfil_id_seq', 118, true);
          public          postgres    false    262            �           0    0    problemas_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.problemas_id_seq', 8, true);
          public          postgres    false    264            �           0    0    provincia_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.provincia_id_seq', 1, false);
          public          postgres    false    266            �           0    0    role_user_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.role_user_id_seq', 103, true);
          public          postgres    false    268            �           0    0    roles_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.roles_id_seq', 1, false);
          public          postgres    false    270            �           0    0    sector_solucion_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.sector_solucion_id_seq', 7, true);
          public          postgres    false    272            �           0    0    solucion_comentarios_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.solucion_comentarios_id_seq', 1, true);
          public          postgres    false    274            �           0    0    solucion_mejorada_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.solucion_mejorada_id_seq', 2, true);
          public          postgres    false    276            �           0    0    solucion_observaciones_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.solucion_observaciones_id_seq', 2, true);
          public          postgres    false    278            �           0    0    solucion_rating_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.solucion_rating_id_seq', 1, false);
          public          postgres    false    280            �           0    0    soluciones_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.soluciones_id_seq', 4, true);
          public          postgres    false    282            �           0    0    soluciontipoinnovas_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.soluciontipoinnovas_id_seq', 5, true);
          public          postgres    false    284            �           0    0    tipo_convocatoria_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.tipo_convocatoria_id_seq', 1, false);
          public          postgres    false    286            �           0    0    tipo_institucion_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.tipo_institucion_id_seq', 15, true);
          public          postgres    false    288            �           0    0    tipo_poblacion_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.tipo_poblacion_id_seq', 24, true);
          public          postgres    false    290            �           0    0    tipo_propuestas_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.tipo_propuestas_id_seq', 4, true);
          public          postgres    false    292            �           0    0    tipo_sector_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.tipo_sector_id_seq', 1, false);
          public          postgres    false    294            �           0    0    tipo_subsector_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.tipo_subsector_id_seq', 1, false);
          public          postgres    false    296            �           0    0    users_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.users_id_seq', 103, true);
          public          postgres    false    298            �           2606    18304    abreviatura abreviatura_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.abreviatura
    ADD CONSTRAINT abreviatura_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.abreviatura DROP CONSTRAINT abreviatura_pkey;
       public            postgres    false    200            �           2606    18306    articulos articulos_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.articulos
    ADD CONSTRAINT articulos_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.articulos DROP CONSTRAINT articulos_pkey;
       public            postgres    false    202            �           2606    18308    canton canton_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.canton
    ADD CONSTRAINT canton_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.canton DROP CONSTRAINT canton_pkey;
       public            postgres    false    204            �           2606    18310    contacto contacto_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.contacto
    ADD CONSTRAINT contacto_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.contacto DROP CONSTRAINT contacto_pkey;
       public            postgres    false    206            �           2606    18312 (   convocatorias_ods convocatorias_ods_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.convocatorias_ods
    ADD CONSTRAINT convocatorias_ods_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.convocatorias_ods DROP CONSTRAINT convocatorias_ods_pkey;
       public            postgres    false    210            �           2606    18314     convocatorias convocatorias_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.convocatorias
    ADD CONSTRAINT convocatorias_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.convocatorias DROP CONSTRAINT convocatorias_pkey;
       public            postgres    false    208            �           2606    18316 2   convocatorias_sectores convocatorias_sectores_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.convocatorias_sectores
    ADD CONSTRAINT convocatorias_sectores_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.convocatorias_sectores DROP CONSTRAINT convocatorias_sectores_pkey;
       public            postgres    false    212            �           2606    18318 8   convocatorias_subsectores convocatorias_subsectores_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.convocatorias_subsectores
    ADD CONSTRAINT convocatorias_subsectores_pkey PRIMARY KEY (id);
 b   ALTER TABLE ONLY public.convocatorias_subsectores DROP CONSTRAINT convocatorias_subsectores_pkey;
       public            postgres    false    214            �           2606    18320 $   estado_registro estado_registro_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.estado_registro
    ADD CONSTRAINT estado_registro_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.estado_registro DROP CONSTRAINT estado_registro_pkey;
       public            postgres    false    216            �           2606    18322    eventos eventos_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.eventos
    ADD CONSTRAINT eventos_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.eventos DROP CONSTRAINT eventos_pkey;
       public            postgres    false    218            �           2606    18324    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    220            �           2606    18326    fondos fondos_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.fondos
    ADD CONSTRAINT fondos_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.fondos DROP CONSTRAINT fondos_pkey;
       public            postgres    false    222            �           2606    18328 &   iniciativa_actor iniciativa_actor_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.iniciativa_actor
    ADD CONSTRAINT iniciativa_actor_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.iniciativa_actor DROP CONSTRAINT iniciativa_actor_pkey;
       public            postgres    false    224            �           2606    18330 ,   iniciativa_contacto iniciativa_contacto_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.iniciativa_contacto
    ADD CONSTRAINT iniciativa_contacto_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.iniciativa_contacto DROP CONSTRAINT iniciativa_contacto_pkey;
       public            postgres    false    226            �           2606    18332 2   iniciativa_informacion iniciativa_informacion_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.iniciativa_informacion
    ADD CONSTRAINT iniciativa_informacion_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.iniciativa_informacion DROP CONSTRAINT iniciativa_informacion_pkey;
       public            postgres    false    228            �           2606    18334 2   iniciativa_institucion iniciativa_institucion_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.iniciativa_institucion
    ADD CONSTRAINT iniciativa_institucion_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.iniciativa_institucion DROP CONSTRAINT iniciativa_institucion_pkey;
       public            postgres    false    230            �           2606    18336 "   iniciativa_ods iniciativa_ods_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.iniciativa_ods
    ADD CONSTRAINT iniciativa_ods_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.iniciativa_ods DROP CONSTRAINT iniciativa_ods_pkey;
       public            postgres    false    232            �           2606    18338 (   iniciativa_origen iniciativa_origen_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.iniciativa_origen
    ADD CONSTRAINT iniciativa_origen_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.iniciativa_origen DROP CONSTRAINT iniciativa_origen_pkey;
       public            postgres    false    234            �           2606    18340 .   iniciativa_poblacion iniciativa_poblacion_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.iniciativa_poblacion
    ADD CONSTRAINT iniciativa_poblacion_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.iniciativa_poblacion DROP CONSTRAINT iniciativa_poblacion_pkey;
       public            postgres    false    236            �           2606    18342 .   iniciativa_ubicacion iniciativa_ubicacion_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.iniciativa_ubicacion
    ADD CONSTRAINT iniciativa_ubicacion_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.iniciativa_ubicacion DROP CONSTRAINT iniciativa_ubicacion_pkey;
       public            postgres    false    238            �           2606    18344    iniciativas iniciativas_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.iniciativas
    ADD CONSTRAINT iniciativas_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.iniciativas DROP CONSTRAINT iniciativas_pkey;
       public            postgres    false    240            �           2606    18346 ,   material_categorias material_categorias_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.material_categorias
    ADD CONSTRAINT material_categorias_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.material_categorias DROP CONSTRAINT material_categorias_pkey;
       public            postgres    false    242            �           2606    18348 .   material_comentarios material_comentarios_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.material_comentarios
    ADD CONSTRAINT material_comentarios_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.material_comentarios DROP CONSTRAINT material_comentarios_pkey;
       public            postgres    false    244            �           2606    18350 4   material_tipodocumentos material_tipodocumentos_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.material_tipodocumentos
    ADD CONSTRAINT material_tipodocumentos_pkey PRIMARY KEY (id);
 ^   ALTER TABLE ONLY public.material_tipodocumentos DROP CONSTRAINT material_tipodocumentos_pkey;
       public            postgres    false    246            �           2606    18352 0   materialesaprendizaje materialesaprendizaje_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.materialesaprendizaje
    ADD CONSTRAINT materialesaprendizaje_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.materialesaprendizaje DROP CONSTRAINT materialesaprendizaje_pkey;
       public            postgres    false    248            �           2606    18354    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    250            �           2606    18356 "   nivel_solucion nivel_solucion_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.nivel_solucion
    ADD CONSTRAINT nivel_solucion_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.nivel_solucion DROP CONSTRAINT nivel_solucion_pkey;
       public            postgres    false    252            �           2606    18358 ,   objetivosdesarrollo objetivosdesarrollo_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.objetivosdesarrollo
    ADD CONSTRAINT objetivosdesarrollo_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.objetivosdesarrollo DROP CONSTRAINT objetivosdesarrollo_pkey;
       public            postgres    false    254            �           2606    18360 "   ods_categorias ods_categorias_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.ods_categorias
    ADD CONSTRAINT ods_categorias_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.ods_categorias DROP CONSTRAINT ods_categorias_pkey;
       public            postgres    false    256            �           2606    18362    parroquia parroquia_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.parroquia
    ADD CONSTRAINT parroquia_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.parroquia DROP CONSTRAINT parroquia_pkey;
       public            postgres    false    258            �           2606    18364    perfil perfil_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.perfil
    ADD CONSTRAINT perfil_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.perfil DROP CONSTRAINT perfil_pkey;
       public            postgres    false    261            �           2606    18366    problemas problemas_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.problemas
    ADD CONSTRAINT problemas_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.problemas DROP CONSTRAINT problemas_pkey;
       public            postgres    false    263            �           2606    18368    provincia provincia_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.provincia
    ADD CONSTRAINT provincia_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.provincia DROP CONSTRAINT provincia_pkey;
       public            postgres    false    265            �           2606    18370    role_user role_user_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.role_user
    ADD CONSTRAINT role_user_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.role_user DROP CONSTRAINT role_user_pkey;
       public            postgres    false    267            �           2606    18372    roles roles_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_pkey;
       public            postgres    false    269            �           2606    18374 $   sector_solucion sector_solucion_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.sector_solucion
    ADD CONSTRAINT sector_solucion_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.sector_solucion DROP CONSTRAINT sector_solucion_pkey;
       public            postgres    false    271            �           2606    18376 .   solucion_comentarios solucion_comentarios_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.solucion_comentarios
    ADD CONSTRAINT solucion_comentarios_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.solucion_comentarios DROP CONSTRAINT solucion_comentarios_pkey;
       public            postgres    false    273            �           2606    18378 (   solucion_mejorada solucion_mejorada_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.solucion_mejorada
    ADD CONSTRAINT solucion_mejorada_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.solucion_mejorada DROP CONSTRAINT solucion_mejorada_pkey;
       public            postgres    false    275            �           2606    18380 2   solucion_observaciones solucion_observaciones_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.solucion_observaciones
    ADD CONSTRAINT solucion_observaciones_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.solucion_observaciones DROP CONSTRAINT solucion_observaciones_pkey;
       public            postgres    false    277            �           2606    18382 $   solucion_rating solucion_rating_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.solucion_rating
    ADD CONSTRAINT solucion_rating_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.solucion_rating DROP CONSTRAINT solucion_rating_pkey;
       public            postgres    false    279            �           2606    18384    soluciones soluciones_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.soluciones
    ADD CONSTRAINT soluciones_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.soluciones DROP CONSTRAINT soluciones_pkey;
       public            postgres    false    281            �           2606    18386 ,   soluciontipoinnovas soluciontipoinnovas_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.soluciontipoinnovas
    ADD CONSTRAINT soluciontipoinnovas_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.soluciontipoinnovas DROP CONSTRAINT soluciontipoinnovas_pkey;
       public            postgres    false    283            �           2606    18388 (   tipo_convocatoria tipo_convocatoria_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.tipo_convocatoria
    ADD CONSTRAINT tipo_convocatoria_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.tipo_convocatoria DROP CONSTRAINT tipo_convocatoria_pkey;
       public            postgres    false    285            �           2606    18390 &   tipo_institucion tipo_institucion_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.tipo_institucion
    ADD CONSTRAINT tipo_institucion_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.tipo_institucion DROP CONSTRAINT tipo_institucion_pkey;
       public            postgres    false    287            �           2606    18392 "   tipo_poblacion tipo_poblacion_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.tipo_poblacion
    ADD CONSTRAINT tipo_poblacion_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.tipo_poblacion DROP CONSTRAINT tipo_poblacion_pkey;
       public            postgres    false    289            �           2606    18394 $   tipo_propuestas tipo_propuestas_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.tipo_propuestas
    ADD CONSTRAINT tipo_propuestas_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.tipo_propuestas DROP CONSTRAINT tipo_propuestas_pkey;
       public            postgres    false    291                        2606    18396    tipo_sector tipo_sector_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.tipo_sector
    ADD CONSTRAINT tipo_sector_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.tipo_sector DROP CONSTRAINT tipo_sector_pkey;
       public            postgres    false    293                       2606    18398 "   tipo_subsector tipo_subsector_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.tipo_subsector
    ADD CONSTRAINT tipo_subsector_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.tipo_subsector DROP CONSTRAINT tipo_subsector_pkey;
       public            postgres    false    295                       2606    18400    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    297                       2606    18402    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    297            �           1259    18403    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    260                       2606    18404 '   articulos articulos_material_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.articulos
    ADD CONSTRAINT articulos_material_id_foreign FOREIGN KEY (material_id) REFERENCES public.materialesaprendizaje(id) ON DELETE CASCADE;
 Q   ALTER TABLE ONLY public.articulos DROP CONSTRAINT articulos_material_id_foreign;
       public          postgres    false    248    3539    202                       2606    18409 "   canton canton_provincia_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.canton
    ADD CONSTRAINT canton_provincia_id_foreign FOREIGN KEY (provincia_id) REFERENCES public.provincia(id) ON DELETE SET NULL;
 L   ALTER TABLE ONLY public.canton DROP CONSTRAINT canton_provincia_id_foreign;
       public          postgres    false    204    3556    265                       2606    18414 ;   convocatorias_ods convocatorias_ods_convocatoria_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.convocatorias_ods
    ADD CONSTRAINT convocatorias_ods_convocatoria_id_foreign FOREIGN KEY (convocatoria_id) REFERENCES public.convocatorias(id) ON DELETE CASCADE;
 e   ALTER TABLE ONLY public.convocatorias_ods DROP CONSTRAINT convocatorias_ods_convocatoria_id_foreign;
       public          postgres    false    3499    208    210                       2606    18419 2   convocatorias_ods convocatorias_ods_ods_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.convocatorias_ods
    ADD CONSTRAINT convocatorias_ods_ods_id_foreign FOREIGN KEY (ods_id) REFERENCES public.ods_categorias(id) ON DELETE CASCADE;
 \   ALTER TABLE ONLY public.convocatorias_ods DROP CONSTRAINT convocatorias_ods_ods_id_foreign;
       public          postgres    false    210    256    3547                       2606    18424 E   convocatorias_sectores convocatorias_sectores_convocatoria_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.convocatorias_sectores
    ADD CONSTRAINT convocatorias_sectores_convocatoria_id_foreign FOREIGN KEY (convocatoria_id) REFERENCES public.convocatorias(id) ON DELETE CASCADE;
 o   ALTER TABLE ONLY public.convocatorias_sectores DROP CONSTRAINT convocatorias_sectores_convocatoria_id_foreign;
       public          postgres    false    212    3499    208                       2606    18429 ?   convocatorias_sectores convocatorias_sectores_sector_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.convocatorias_sectores
    ADD CONSTRAINT convocatorias_sectores_sector_id_foreign FOREIGN KEY (sector_id) REFERENCES public.tipo_sector(id) ON DELETE CASCADE;
 i   ALTER TABLE ONLY public.convocatorias_sectores DROP CONSTRAINT convocatorias_sectores_sector_id_foreign;
       public          postgres    false    293    212    3584                       2606    18434 K   convocatorias_subsectores convocatorias_subsectores_convocatoria_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.convocatorias_subsectores
    ADD CONSTRAINT convocatorias_subsectores_convocatoria_id_foreign FOREIGN KEY (convocatoria_id) REFERENCES public.convocatorias(id) ON DELETE CASCADE;
 u   ALTER TABLE ONLY public.convocatorias_subsectores DROP CONSTRAINT convocatorias_subsectores_convocatoria_id_foreign;
       public          postgres    false    208    214    3499                       2606    18439 H   convocatorias_subsectores convocatorias_subsectores_subsector_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.convocatorias_subsectores
    ADD CONSTRAINT convocatorias_subsectores_subsector_id_foreign FOREIGN KEY (subsector_id) REFERENCES public.tipo_subsector(id) ON DELETE CASCADE;
 r   ALTER TABLE ONLY public.convocatorias_subsectores DROP CONSTRAINT convocatorias_subsectores_subsector_id_foreign;
       public          postgres    false    214    3586    295            	           2606    18444 7   convocatorias convocatorias_tipoconvocatoria_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.convocatorias
    ADD CONSTRAINT convocatorias_tipoconvocatoria_id_foreign FOREIGN KEY (tipoconvocatoria_id) REFERENCES public.tipo_convocatoria(id) ON DELETE CASCADE;
 a   ALTER TABLE ONLY public.convocatorias DROP CONSTRAINT convocatorias_tipoconvocatoria_id_foreign;
       public          postgres    false    285    3576    208            
           2606    18449 +   convocatorias convocatorias_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.convocatorias
    ADD CONSTRAINT convocatorias_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 U   ALTER TABLE ONLY public.convocatorias DROP CONSTRAINT convocatorias_user_id_foreign;
       public          postgres    false    297    3590    208                       2606    18454    eventos eventos_user_id_foreign    FK CONSTRAINT     ~   ALTER TABLE ONLY public.eventos
    ADD CONSTRAINT eventos_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 I   ALTER TABLE ONLY public.eventos DROP CONSTRAINT eventos_user_id_foreign;
       public          postgres    false    218    297    3590                       2606    18459    fondos fondos_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.fondos
    ADD CONSTRAINT fondos_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.fondos DROP CONSTRAINT fondos_user_id_foreign;
       public          postgres    false    222    297    3590                       2606    18464 =   iniciativa_contacto iniciativa_contacto_iniciativa_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativa_contacto
    ADD CONSTRAINT iniciativa_contacto_iniciativa_id_foreign FOREIGN KEY (iniciativa_id) REFERENCES public.iniciativas(id) ON DELETE CASCADE;
 g   ALTER TABLE ONLY public.iniciativa_contacto DROP CONSTRAINT iniciativa_contacto_iniciativa_id_foreign;
       public          postgres    false    226    240    3531                       2606    18469 C   iniciativa_institucion iniciativa_institucion_iniciativa_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativa_institucion
    ADD CONSTRAINT iniciativa_institucion_iniciativa_id_foreign FOREIGN KEY (iniciativa_id) REFERENCES public.iniciativas(id) ON DELETE CASCADE;
 m   ALTER TABLE ONLY public.iniciativa_institucion DROP CONSTRAINT iniciativa_institucion_iniciativa_id_foreign;
       public          postgres    false    230    240    3531                       2606    18474 I   iniciativa_institucion iniciativa_institucion_tipo_institucion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativa_institucion
    ADD CONSTRAINT iniciativa_institucion_tipo_institucion_id_foreign FOREIGN KEY (tipo_institucion_id) REFERENCES public.tipo_institucion(id) ON DELETE CASCADE;
 s   ALTER TABLE ONLY public.iniciativa_institucion DROP CONSTRAINT iniciativa_institucion_tipo_institucion_id_foreign;
       public          postgres    false    230    287    3578                       2606    18479 3   iniciativa_ods iniciativa_ods_iniciativa_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativa_ods
    ADD CONSTRAINT iniciativa_ods_iniciativa_id_foreign FOREIGN KEY (iniciativa_id) REFERENCES public.iniciativas(id) ON DELETE CASCADE;
 ]   ALTER TABLE ONLY public.iniciativa_ods DROP CONSTRAINT iniciativa_ods_iniciativa_id_foreign;
       public          postgres    false    232    240    3531                       2606    18484 6   iniciativa_ods iniciativa_ods_ods_categoria_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativa_ods
    ADD CONSTRAINT iniciativa_ods_ods_categoria_id_foreign FOREIGN KEY (ods_categoria_id) REFERENCES public.ods_categorias(id) ON DELETE CASCADE;
 `   ALTER TABLE ONLY public.iniciativa_ods DROP CONSTRAINT iniciativa_ods_ods_categoria_id_foreign;
       public          postgres    false    232    256    3547                       2606    18489 ?   iniciativa_poblacion iniciativa_poblacion_iniciativa_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativa_poblacion
    ADD CONSTRAINT iniciativa_poblacion_iniciativa_id_foreign FOREIGN KEY (iniciativa_id) REFERENCES public.iniciativas(id) ON DELETE CASCADE;
 i   ALTER TABLE ONLY public.iniciativa_poblacion DROP CONSTRAINT iniciativa_poblacion_iniciativa_id_foreign;
       public          postgres    false    236    240    3531                       2606    18494 C   iniciativa_poblacion iniciativa_poblacion_tipo_poblacion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativa_poblacion
    ADD CONSTRAINT iniciativa_poblacion_tipo_poblacion_id_foreign FOREIGN KEY (tipo_poblacion_id) REFERENCES public.tipo_poblacion(id) ON DELETE CASCADE;
 m   ALTER TABLE ONLY public.iniciativa_poblacion DROP CONSTRAINT iniciativa_poblacion_tipo_poblacion_id_foreign;
       public          postgres    false    236    289    3580                       2606    18499 ;   iniciativa_ubicacion iniciativa_ubicacion_canton_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativa_ubicacion
    ADD CONSTRAINT iniciativa_ubicacion_canton_id_foreign FOREIGN KEY (canton_id) REFERENCES public.canton(id) ON DELETE CASCADE;
 e   ALTER TABLE ONLY public.iniciativa_ubicacion DROP CONSTRAINT iniciativa_ubicacion_canton_id_foreign;
       public          postgres    false    238    204    3495                       2606    18504 ?   iniciativa_ubicacion iniciativa_ubicacion_iniciativa_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativa_ubicacion
    ADD CONSTRAINT iniciativa_ubicacion_iniciativa_id_foreign FOREIGN KEY (iniciativa_id) REFERENCES public.iniciativas(id) ON DELETE CASCADE;
 i   ALTER TABLE ONLY public.iniciativa_ubicacion DROP CONSTRAINT iniciativa_ubicacion_iniciativa_id_foreign;
       public          postgres    false    240    238    3531                       2606    18509 2   iniciativas iniciativas_estado_registro_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativas
    ADD CONSTRAINT iniciativas_estado_registro_id_foreign FOREIGN KEY (estado_registro_id) REFERENCES public.estado_registro(id) ON DELETE CASCADE;
 \   ALTER TABLE ONLY public.iniciativas DROP CONSTRAINT iniciativas_estado_registro_id_foreign;
       public          postgres    false    240    216    3507                       2606    18514 3   iniciativas iniciativas_iniciativa_actor_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativas
    ADD CONSTRAINT iniciativas_iniciativa_actor_id_foreign FOREIGN KEY (iniciativa_actor_id) REFERENCES public.iniciativa_actor(id) ON DELETE CASCADE;
 ]   ALTER TABLE ONLY public.iniciativas DROP CONSTRAINT iniciativas_iniciativa_actor_id_foreign;
       public          postgres    false    240    224    3515                       2606    18519 9   iniciativas iniciativas_iniciativa_informacion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativas
    ADD CONSTRAINT iniciativas_iniciativa_informacion_id_foreign FOREIGN KEY (iniciativa_informacion_id) REFERENCES public.iniciativa_informacion(id) ON DELETE CASCADE;
 c   ALTER TABLE ONLY public.iniciativas DROP CONSTRAINT iniciativas_iniciativa_informacion_id_foreign;
       public          postgres    false    240    228    3519                       2606    18524 4   iniciativas iniciativas_iniciativa_origen_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativas
    ADD CONSTRAINT iniciativas_iniciativa_origen_id_foreign FOREIGN KEY (iniciativa_origen_id) REFERENCES public.iniciativa_origen(id) ON DELETE CASCADE;
 ^   ALTER TABLE ONLY public.iniciativas DROP CONSTRAINT iniciativas_iniciativa_origen_id_foreign;
       public          postgres    false    240    234    3525                        2606    18529 '   iniciativas iniciativas_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.iniciativas
    ADD CONSTRAINT iniciativas_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;
 Q   ALTER TABLE ONLY public.iniciativas DROP CONSTRAINT iniciativas_user_id_foreign;
       public          postgres    false    297    240    3590            !           2606    18534 =   material_comentarios material_comentarios_material_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.material_comentarios
    ADD CONSTRAINT material_comentarios_material_id_foreign FOREIGN KEY (material_id) REFERENCES public.materialesaprendizaje(id) ON DELETE CASCADE;
 g   ALTER TABLE ONLY public.material_comentarios DROP CONSTRAINT material_comentarios_material_id_foreign;
       public          postgres    false    244    3539    248            "           2606    18539 9   material_comentarios material_comentarios_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.material_comentarios
    ADD CONSTRAINT material_comentarios_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 c   ALTER TABLE ONLY public.material_comentarios DROP CONSTRAINT material_comentarios_user_id_foreign;
       public          postgres    false    3590    244    297            #           2606    18544 ;   materialesaprendizaje materialesaprendizaje_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.materialesaprendizaje
    ADD CONSTRAINT materialesaprendizaje_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 e   ALTER TABLE ONLY public.materialesaprendizaje DROP CONSTRAINT materialesaprendizaje_user_id_foreign;
       public          postgres    false    297    248    3590            $           2606    18549 %   parroquia parroquia_canton_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.parroquia
    ADD CONSTRAINT parroquia_canton_id_foreign FOREIGN KEY (canton_id) REFERENCES public.canton(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.parroquia DROP CONSTRAINT parroquia_canton_id_foreign;
       public          postgres    false    3495    204    258            %           2606    18554    perfil perfil_canton_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.perfil
    ADD CONSTRAINT perfil_canton_id_foreign FOREIGN KEY (canton_id) REFERENCES public.canton(id);
 I   ALTER TABLE ONLY public.perfil DROP CONSTRAINT perfil_canton_id_foreign;
       public          postgres    false    261    3495    204            &           2606    18559 %   problemas problemas_canton_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.problemas
    ADD CONSTRAINT problemas_canton_id_foreign FOREIGN KEY (canton_id) REFERENCES public.canton(id);
 O   ALTER TABLE ONLY public.problemas DROP CONSTRAINT problemas_canton_id_foreign;
       public          postgres    false    204    3495    263            '           2606    18564 +   problemas problemas_convocatoria_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.problemas
    ADD CONSTRAINT problemas_convocatoria_id_foreign FOREIGN KEY (convocatoria_id) REFERENCES public.convocatorias(id);
 U   ALTER TABLE ONLY public.problemas DROP CONSTRAINT problemas_convocatoria_id_foreign;
       public          postgres    false    208    263    3499            (           2606    18569 0   problemas problemas_tipo_convocatoria_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.problemas
    ADD CONSTRAINT problemas_tipo_convocatoria_id_foreign FOREIGN KEY (tipo_convocatoria_id) REFERENCES public.tipo_convocatoria(id);
 Z   ALTER TABLE ONLY public.problemas DROP CONSTRAINT problemas_tipo_convocatoria_id_foreign;
       public          postgres    false    263    3576    285            )           2606    18574 #   problemas problemas_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.problemas
    ADD CONSTRAINT problemas_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 M   ALTER TABLE ONLY public.problemas DROP CONSTRAINT problemas_user_id_foreign;
       public          postgres    false    3590    263    297            *           2606    18579 #   role_user role_user_role_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_user
    ADD CONSTRAINT role_user_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id);
 M   ALTER TABLE ONLY public.role_user DROP CONSTRAINT role_user_role_id_foreign;
       public          postgres    false    267    269    3560            +           2606    18584 #   role_user role_user_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_user
    ADD CONSTRAINT role_user_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 M   ALTER TABLE ONLY public.role_user DROP CONSTRAINT role_user_user_id_foreign;
       public          postgres    false    3590    267    297            ,           2606    18589 =   solucion_comentarios solucion_comentarios_solucion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.solucion_comentarios
    ADD CONSTRAINT solucion_comentarios_solucion_id_foreign FOREIGN KEY (solucion_id) REFERENCES public.soluciones(id) ON DELETE CASCADE;
 g   ALTER TABLE ONLY public.solucion_comentarios DROP CONSTRAINT solucion_comentarios_solucion_id_foreign;
       public          postgres    false    273    281    3572            -           2606    18594 9   solucion_comentarios solucion_comentarios_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.solucion_comentarios
    ADD CONSTRAINT solucion_comentarios_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 c   ALTER TABLE ONLY public.solucion_comentarios DROP CONSTRAINT solucion_comentarios_user_id_foreign;
       public          postgres    false    297    273    3590            .           2606    18599 7   solucion_mejorada solucion_mejorada_solucion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.solucion_mejorada
    ADD CONSTRAINT solucion_mejorada_solucion_id_foreign FOREIGN KEY (solucion_id) REFERENCES public.soluciones(id) ON DELETE CASCADE;
 a   ALTER TABLE ONLY public.solucion_mejorada DROP CONSTRAINT solucion_mejorada_solucion_id_foreign;
       public          postgres    false    275    281    3572            /           2606    18604 A   solucion_observaciones solucion_observaciones_solucion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.solucion_observaciones
    ADD CONSTRAINT solucion_observaciones_solucion_id_foreign FOREIGN KEY (solucion_id) REFERENCES public.soluciones(id) ON DELETE CASCADE;
 k   ALTER TABLE ONLY public.solucion_observaciones DROP CONSTRAINT solucion_observaciones_solucion_id_foreign;
       public          postgres    false    277    3572    281            0           2606    18609 3   solucion_rating solucion_rating_solucion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.solucion_rating
    ADD CONSTRAINT solucion_rating_solucion_id_foreign FOREIGN KEY (solucion_id) REFERENCES public.soluciones(id) ON DELETE CASCADE;
 ]   ALTER TABLE ONLY public.solucion_rating DROP CONSTRAINT solucion_rating_solucion_id_foreign;
       public          postgres    false    3572    279    281            1           2606    18614 /   solucion_rating solucion_rating_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.solucion_rating
    ADD CONSTRAINT solucion_rating_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 Y   ALTER TABLE ONLY public.solucion_rating DROP CONSTRAINT solucion_rating_user_id_foreign;
       public          postgres    false    279    297    3590            2           2606    18619 .   soluciones soluciones_nivelsolucion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.soluciones
    ADD CONSTRAINT soluciones_nivelsolucion_id_foreign FOREIGN KEY (nivelsolucion_id) REFERENCES public.nivel_solucion(id) ON DELETE CASCADE;
 X   ALTER TABLE ONLY public.soluciones DROP CONSTRAINT soluciones_nivelsolucion_id_foreign;
       public          postgres    false    3543    281    252            3           2606    18624 )   soluciones soluciones_problema_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.soluciones
    ADD CONSTRAINT soluciones_problema_id_foreign FOREIGN KEY (problema_id) REFERENCES public.problemas(id) ON DELETE CASCADE;
 S   ALTER TABLE ONLY public.soluciones DROP CONSTRAINT soluciones_problema_id_foreign;
       public          postgres    false    281    3554    263            4           2606    18629 /   soluciones soluciones_sectorsolucion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.soluciones
    ADD CONSTRAINT soluciones_sectorsolucion_id_foreign FOREIGN KEY (sectorsolucion_id) REFERENCES public.sector_solucion(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.soluciones DROP CONSTRAINT soluciones_sectorsolucion_id_foreign;
       public          postgres    false    271    3562    281            5           2606    18634 %   soluciones soluciones_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.soluciones
    ADD CONSTRAINT soluciones_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 O   ALTER TABLE ONLY public.soluciones DROP CONSTRAINT soluciones_user_id_foreign;
       public          postgres    false    3590    297    281            6           2606    18639 ;   soluciontipoinnovas soluciontipoinnovas_solucion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.soluciontipoinnovas
    ADD CONSTRAINT soluciontipoinnovas_solucion_id_foreign FOREIGN KEY (solucion_id) REFERENCES public.soluciones(id) ON DELETE CASCADE;
 e   ALTER TABLE ONLY public.soluciontipoinnovas DROP CONSTRAINT soluciontipoinnovas_solucion_id_foreign;
       public          postgres    false    283    281    3572            7           2606    18644 A   soluciontipoinnovas soluciontipoinnovas_tipoinnovacion_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.soluciontipoinnovas
    ADD CONSTRAINT soluciontipoinnovas_tipoinnovacion_id_foreign FOREIGN KEY (tipoinnovacion_id) REFERENCES public.tipo_propuestas(id) ON DELETE CASCADE;
 k   ALTER TABLE ONLY public.soluciontipoinnovas DROP CONSTRAINT soluciontipoinnovas_tipoinnovacion_id_foreign;
       public          postgres    false    291    3582    283            8           2606    18649 /   tipo_sector tipo_sector_convocatoria_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.tipo_sector
    ADD CONSTRAINT tipo_sector_convocatoria_id_foreign FOREIGN KEY (convocatoria_id) REFERENCES public.tipo_convocatoria(id) ON DELETE SET NULL;
 Y   ALTER TABLE ONLY public.tipo_sector DROP CONSTRAINT tipo_sector_convocatoria_id_foreign;
       public          postgres    false    293    3576    285            9           2606    18654 /   tipo_subsector tipo_subsector_sector_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.tipo_subsector
    ADD CONSTRAINT tipo_subsector_sector_id_foreign FOREIGN KEY (sector_id) REFERENCES public.tipo_sector(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.tipo_subsector DROP CONSTRAINT tipo_subsector_sector_id_foreign;
       public          postgres    false    295    3584    293            :           2606    18659    users users_perfil_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_perfil_id_foreign FOREIGN KEY (perfil_id) REFERENCES public.perfil(id) ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.users DROP CONSTRAINT users_perfil_id_foreign;
       public          postgres    false    3552    261    297            �      x������ � �      �      x��ZKr#9�]3O�@[�?�1I��3�R�Tfٌ�Y�Ȩ��,�z5'�e/z�V���b����z��Jf�r�������9���A�ew����[�Z�����Y���w�3���z�	߻�<��g�����7�̂qe_��6��������>nn���ݳ��_Hx����d�E�7w��Ye���b�-��lq�q�a����A�js�y\�f�}�h�$VVf>Vv� �� ζ2/x�6ǚ���L֢b+��̿,�2��Z��t�� �ʰx8Kh� K;i��,n��͒=~��x�޲\V��Y�ȓ�;�ּ�l%�E�M�~J��8���_���l�z�u������Z�-��G�T�iU�Vʖ;��e�u��V-p쫝����z?�����n4���Xe���Ж���� �>�]O�l OT�)s:�ʬ07z��s7�{�U�Ua\rO?Q�7+�J���=��kQ���ݱ}_�������}Z|�۲���}X߯?n��v��n�����������L2�
�;w���p��	��� ds"�Xx��W;���}Ï�LPend����*�ם��Q��^v��՞��웳�Ƈ�(w��)��M-ZC�׳�H+��hR���y#;���"?d�c_��*���prޑ��;J�hGN:��8J��5>�p�ElG�2D�U���g� ÏR��������/p`�
�����`Rd�Ms<�ٷ��ԡ?9+����l�E�&o))B$^d8��Bq���T�(K��t̵h��
����m#e��C���-{ ��W;���:�7U^�-ma%^��٬�V��7�S�6�,A�9�׆9�h'��w�N���@�EE>�*�� %��׺���r_�0��\�-H�-+:�{lx��+9d	b� � .*�l7�*�+_�r�[b�`�sߵ�z<�=M��^���MK@@�G�EbPv ��2J�A�/��l�Ⱦn�S߱o�-k��,��p�~0���*#P��W��9Qx~�q��V�1����A"����#�m��^����H\ۮ���@�>�8��6�,9�.ʚ�Hl�"���7��~��''�]g�#6���8T�EA�n���#��9r�>(�z�m^2b�Gk��8�ZFe�3kj���� up4q�Ԉ�Aq]�ӓ��3`����ad��jw���;~��!W"/Z�<�B٭�+�W�qA�]�SU��.y��j���*o*�������{�M�,�B"��V�w�E��sQ����9da<��A�Ye�ٟ��ќ`�PU`gw��{*���A�5ǏܰE�vb_�&'������2���t��q�MU����[T����E��p�8�e�+!��}�뷠ve%|�^a3(_�3/<�L�+��]Ds7��h�,r�.�(~��v�PL{>�\�Kѧb�,�ʠ+�{�UF��Y����ז4}�R ��p�y���S���:urKـ�_��o�h*�ȝ�ɥH����xyFyz٠����VO(����)wY�YѦ���E"���!�_4� �_��H��b:�|�(�l|��Jo�<{�R�X��	i~(�2<b��q�9Hj�oG��(�ʨ�sfQ0���(�n�S�����zUUdQ`_8�t�2Z؝E�Y8�l��<��~��~�U~����az����<�5b	���9�e����̋0h
��=?
����P@�>�R����VG��Q�f˾y"x��8�}0�.luW�c� ��|(�f�/�/�IK�d�#Ĝ����F̢�7���\���$ʾ� ?���l4,��h�`��7��s��c�6��M�S��E6�VC�`�ZF�@t����-g�'���y��F�p��ս@3�O��(��>���>9�風�\[e�%�ņtS7MQk�e�vh?ŉ-鯑 �^�/�'�B1mlcZ(HA�V)�g�a�4��l{j;�������V���o;86G1{U�7��[��A�sI����="ߵ�\2�5I�9a����H-ξ�Z�v�7� A�`�0�|'[�@���d�w�(���(���-��k���[*B8>s.yS<��^=�f$�?柱�p��X�O�!2�%X)�Z���,����L�N�f�?��r$g�Q�2�o9�82�#�U�8�Ȯ��Bu+������[�H^ה(�e4v-#\�,�\��٨��㔡c�o��uA� d��=���L�z.�*G����h��f�q4?A~���7�S�/����E��cG���E�4O�^kA��Vi�g�c4G��Mj��D?��K{|9�,����~pi{�e�3�%��3���&�5m�%W)��(��$?�����|�%��>�,��hR�*�б�D8KL�D	�����%��}h~T��P����hdXN-}a0�y~�?7��s�[-�>R1s�[l�j-��p4KLlEid����β;Te('N�)P��vhgP4�!̖���kQe�؃{.@b���U��{���ų�DU���������8ٖ&�Yb�U���UF�Y��ggVס�8p����4��-��2Ґ�RU��^�(����~�C��ﵠQ8h�S���hf^�T	��N��X5ƨaP+�VM�Y�� ���͍
��x���8��D9�������_�x ���K�r�I%���͟_�.Q��U�W����=��t�2ڃ;KC�����?�0�A�򀤛����7�]d���|T�*��!��G��K�o���U=����d�JP~��?r���u�w	�k�Û���CJ[!�E#��G�_��~�P�Bů*Þ�Bfil���@���2������
�$��|[�2�����{Z����~�?�TG�󬤩+Zv�����ɍ������6�/_7��,M�0�K�z-#��,M�؏�u��=���lC��(����Ծxr�_�hq8����>�F����Q��՞+�Ǟe��[Vm4p�nE�H]1�F[�H�HKg����@�T�5o��yWEy����8̥)���е�.#�k��9� 0B�L��,Ӛ� G�+Z��xd���7N��'���@�gW���r%#�pFG9�DN�z�Ԣ����h����>���\�ߢyQI�z'�B49�%�:�р�\�8��q]*��h�{V�;:� �����";�$*����@���(��O���J�{	(���j�2ڸ�ѝ%|W�Z*(1�����Q�U��縷rݩ�����ZF�ຮg����@&=..U�-���U�LC�u)Ԥ�r9������Q���>��WNM�e�\�蹁�a�\ԝVG�[`��v�������`R�ug�_��n��4���y�[e�8�E,�R�E��5�FAjR-�.�YglI>��-K)k�"��>�Y��sEph��~$}׸q�����Ě6�e�UFk��b"�4��1��Qq�vMԉC�~.7����t��Wa0��Z���E�FW4C˕�A>ȶc���6+t��]���	�&�ΐ�J�1��H^	~���I��A�\��2B�\�&D��E՝�y�U<ǺQ�!ز�e%�E����p�_��^j�_z��)��n���A1����4�_!u �5EC�hk*�9 ��LrS��0�l.Y^��lV�k�yo�U� y��dD�io	��C����(�C����C�f:�<L�2zt_��a�(Dt��Ut^��wYP	G���Ѳ�,�B[WS��LPS<��'�7h��V�"7[�z����*#��O ��&�fq���.�/�/�Uj �fd���f���7�R����7��2G���,�q�jdޚNc/*�NIzXq�Qƨ�#Z��d׈"?Aj� Т���r��-�+*�a?�:�i�$�\9��*^7�.ӵ:��a�����B��I]
>ވ�� 0��-�	�9_mS�6�������C��z��v�ZF;�����!�9-����*^]*_������}�G2R�P�=�0I�ͅk��VMe=����/����7���@
��7�U�9ص�� u  ¿�U~�:��d<�ms5��.�WK�FBUǁ
��PzR�����U1�O)�S/�Px�UF���~h��	z�w���N#�s^�0�:����-�J��
J�|�ˆ5�oJ�݉���Hۏ|a�����F��qL��f�S���{��MFS�b�*O�2RR�c�8����z�*sj�)�z ����`��+Y������g�B�Q6����À%����e�z��'_�*�1�N F���`�I�"ՔʎE}:�G^���n� �����Synf��jh��������"���@M|:�)±�^����#B�g�G��$T#TA���������م�0	� (u���TC��|�k��F��4縠��P��_ u�F���^�M��D,�,QC���$6H�� �?�V���2����>���@?{zu��&�l�J�\�+�KL���t �w�W86M�u�O-ld��xQ��H㨕�����>�����T�q�qB�^�9Mp����}y�
"V}�*N*9���l|3���FI���UF��}�o��!!Gf���H��_y%�XM`E����E���甩kYN����o�0h��Ubm��Q�f���dcA-C^q7v�^�kԳ���"ˏB]%���0�z�r=w-#��� 4ZC25��l���+s�����C}��is�	%�%�DM�;�2� �"�!F҂�Lb�TNF�֫IoTZ�Yy��Ŗ'���2�bb�%=[�L��Y(EVϒm��8�׈]8k��#��<? �-C$4 	�ȴ�R0\0dץ����H�Y��38����-
@SeR�B�]\����*�OC�y�2��-� y4B��v���~�W3���^�Z��x~f����k!����e�O=`�CC�H�ԝ���N���Cv�Omj7xu%P�����g�D���Q�߃t<��h?�K���Q���FM#�me,�Qh����=��K�O�><c�Q�����ZF�?��4SCd}y����h���μ�DR�DsBwC�G�i>�x�)��k��%c� �P�p�z�q�J)s�7���
�x����rXJ���r�����׍�x`��f��'��n�ȑ�S�a`zSr(�T��V0��O�޽�_�X�(      �   y  x�eX�r�|�~�yHb�ԅ��כ�K�UV����Da%� �I���oȏ�n�N0�*W�Ս�� 3衺R5�lۘ��ƿw�J�����`Ip0�46�x�����S�3�6g��D���ִ�[��ڋ��M�3{�s�&玝;f������Tr���z+��[_lLn���[��7�{[|��I��М�#b�3��Ɯ��&��-n����˿�4�9=�S���͉{��ˉr$�������d���LA0�kw�xiD?���9Е�O�)߷���d����5�k��.�Y	+K,������L��Mj�ϙ)D~g�_%�,'��1����l�N,Q��j�|�R��jr�{�-�`_5���C��
���ױ�e�B�_�
3���b��	� �9�ASxۛfh��Љ(֦p	W�8�":<8�rt
tk|c����(���?'��)d�7�������q|��й-��ߋ���<��#:��I�0��~y!����b���A�F�o�Lc[��/�Lǖ��"��pq>Y3=��5�e�"ؠˉ�DoN�l�bF���N��4Gg@q��S�9�OpOp@��.���aUs9Q�ؘ�<d���,P���Q�ub����U�v��_B�[���o&�*0W��U`e���ys����d4���G���*A�q'[��П׺� �)p&�*�x^�B3P8�Ɯ��{׸��1_���5/�s�xNh04"�k�6��P��e�Ǖ�C7�F�%/5쮙N�V��z��^�5'8ļTո5/���Y�Gf��~�M�=�Q��9F��O|T�Y+��z1�~"�l׻�(Պ��%��Ľ�C϶L|��C���j�(޷��8�`�(�������ŝi\ۧ���9�]u�0:��8Ю���??ږW��g>��o>��n�9��7@��tZ����y��k�s��
�Pk�`��VmM<ڶǆy04O�S���w��b�:sr�����L_��w�ֻ$�
���s���9H�D�v5��7����Vů�\TmWp�I$B�"��7O��E�v�js6�G%5#���`�~�̀tˆ)ڪ���h)��+�Jʒxo��Yh-�g�ȕ�	?�j�G����3_{T� %�&�[h_��%� ��C�Ӥ3�e�
��4)g��Z	�Ur��YJG��/8Z�ĩ$:
�c��i*)Nlg��VIo*VT��b) �QT�����	�foN�Y2��hI�bg&�Wd6��C��;!�E(؟�ti���/� ��˭�d�D8�N0��8j���԰�<gx2p]�AS!��{�U
�]e��)��k;���2�Ƞ��"��)D�Rڑ�uT��*Ib�ݳm5%���'&��k���A߹G�`�}��xr� �f�p�`��m��Ð��)\�<K�1��O,�R � �_�ڊ�T����X�rZ��vh���b���rD�^W�DkY>J���k��ҋ�S��or�T)
� I��M�:��N��R��x��-��������Hv0��%#pM<�ڨ�/�+ɭ�+�]�5��Pq �B>�kTj`zgD�bgCfh9aN���d�Kw��xl�F.X��׉Q��� ���_b�R�Ѭ&[��^�);�'t����ζ-�.#��!\P)&����0�A�?��8r҇�zf`�=���φ��R�`��3�]�X�(ђ�7�\��e4C�O��j��KX��N:� Jk� �����[�9��MI��8N�mgO��`��\���c���&oiɃC9���4p̹K�؃ Y�x�/pM���.%��De(�U��F�X�/�cC%�$'L	o�FD��Ql`l�V�	��o��먔}i��R5�1�m��oh��-aW�&�^�+62��� :�6�g��j��td�hsfd�oe�AN�'+��!�����!�Q�B]���b��~��OBS��Ql��=
{#�g�q�.(畯�Yq�?�Q��Z�x�ctAp�\������Pr�f�)T5�*��i�N�W(5'�i"Q`��jJUM��o[V2��@^�E���'D=� 	�8T����C#�icRD��J2+Sܡ���L:1�J��"�y��z��xc�pvB�j
����4!�ϓ|�t�z6�^Tn͇$�����Y�3ѷ�v����w�����J      �      x������ � �      �   /  x��V�n�F����"@H���Y8(��e_e�X�+y������(.S��]��7KZ�����0\r���o&
�`z��s�X-Vt<_�j>�8;�����bv�d�������y�q؉�N8`1�q'����Lڒ Q�\�	C2'+�J*E�U��Y��S'2m�4M+�W��$ɯ�Vx9����7�mS&)��/N����LV�9��/�_�AX��)�+P;M)>-sQT"U���`���AH7p��Ӯ-X<�h5��;U���8�[iD��+��m�Аό�a@�f4�*6�����OoT��>*HEz�o�D$�@��J��j�o:�?�i��k�����t0��a8����hx��v:H���u�-�MPQ��X���x=Vmԉz�'�hҏ�;k�^0�Di��j���T��Cka%E2����A�6��8��M�*S����*��?�^z�a�Q��r�z��M(�&��$<z:r��I�ݳV����.D%��/Q�Ik+2�([KԈ� ���kz�t8x=����h�Fq�-��>E�4���Y�c��A��Yk���DC^j'�U�0ʷ�(�N�BL��*�=�N]e�qh�xԈ�N/
� *��V��,�Ae��g�(�V���R�-�g���
�6W���Gw+2ɝ���%#3���2��U\���?¥5(I����l�k��\���u��(SFmT���8p���S�BU�`��6^ZWJ��9�ҸnFD��в*5m@\�|x��D��)��a���e.y /�1��&�x���%D�����:1D@`����$�W��xm5?���-��t����#������3��������l�h�;�d��m0��f�oꏄ9�Hc,H\E���;�E�C�t��%.����<��"��_�EdI;a�����H�T-�)YI�A��r�PX��d�8 ��m1��8�=߭*2[]�a�Ldm�kMb�o��8�X�I��6��0�ne�}
0���" ��
l�OlT���>OVm
�� ����<��|��̸��2E�v��b�O��0�S��R�����⎇m6��6�0�P�
.ADT����[B��\Y�!��ɤnẀ\�fUa��o
��l�=�i\ˑ!e�j�\�K�gn�$G�d��hs�/�=�lQ*���ȥ�-��G�����}o7������{g-pm����٧�rq<=��)�y���������W����K��T�3	��ч���gǍ��(��݉�jpT��M�B�fV�7����%��#=qrߥʱ9^a�3!ic�g~�f��5j|+�� ��XM]Zᝓ9
��y���o�b%̋�g/|cx��Ra����Χ�r�-�y``����k �n2�!��Zq���"� �g!L/5����g�������0�S𥹬����BcV�Q�-Y�]z��m�#kLo��ڙ��
*p��%H��/���!���&��Z%��)���'ør$nCM`�$u�A�T��vWg�EO���K����5��%G�9���x�"q�s�~GD���-�{�tD�׺�Z�DAx      �   T  x���]��0���SpV��������XS	�6n���i<���I�$MH�9��:�MC5�FPG�5D����`�ZA�j��DN��V�eB6��� ���mb6ɖ%�p@��`G,�m򟽘��oA�#�-�iK*	[�̸OK��e�$Ԉ�c�s5҈K�x��uPE���8GC�E�3�)w<�=iĈ�r��P�!�.Hdo3d���Dq�9�� �5�x�a�G�jNh����~�� �5~��6!��J�ʑF��p����5A�0�8�X!�K��"^��1/��G���#�R�W��IN5�5Q�!8
�Ξn���+���
������CD�ّ�      �   �   x����m�0��*Ԁ\�z����:"_ [wf��k��ʒ%$a�)�q�|e2"Fu䖡��� ��+"F=���$MR�+���\�
��gWvֈ��
��G����-d�->V@R=��9'��ەi���㒷鵈,r���>�j/ޓ�\�h��[��y��|�#`w����=�|/�st���=>t$,�gGu�T_�&��}����      �   �   x����m� F��Y�ʟmx��?GI��K㪺���#|�?����p�d�q��2i�6����^N6�y�����Y��
M���<�춻��!���&���1�áx�(g��c?��G`6俀�2�̎ܗ�l�}�͞ܗ�T�᧜�q.�V�~e2B�Kr	�!��z(��c/��'#����t^�߳���+f�#��Ɨ�%^2�j�n0Guш�`���%%�7G����I�H��L)>?����j      �   �   x�3�t�SJ-�,�<�9�3ȕ�<�(/3/�����@��H��D�����L����qq:�'%��s:p�&'��b�1�_��� Δļ��"R�0�tL.�,���ݦ��y���~d����� ��M�      �      x���ko#ٕ ����6���0�x2H5�EI��+IQJ���CdH�f<���Ky3�^��ᶷ��q��v��;g��[���^��E������{o<(*++�*{�JeR�7n�{�O���:>�Kg�f����㯭��qES4UVTY�*jcCQ�OE���n֛���_6T����҉�4��+7HB�u�J�-9�,��=�Ʈ4��0����x�P����xa`��HWv��s���؍��!r'�헁��)�����D�C)�&v���x�;Nj��H�H��ԉ�ԅ��tL�������б}7^���σv�Nb��6L�����+o��-��HX. �� �]�X�u����<(��(�}z�y.`f��	�6����y8���#�9�=
#�����Kc��s?��k��ʋ�K�ʑ�L���ڕ-/N"���$
��%v�+�+���r��RK:��ԏ[{��k�KI�U3jߨ����u�n4��l5֌�R7�Fe�$�xc}=����݄�l-��/�-So6�f]��O���u��^�7�6^�������g�,�N���Ҭ$��r(���f}�XU�tOZ�����֞�u��V���S�C���R��p�P�0��p$��3� bF��͇OndGp�s��S�M��NĆ3���7_�ܘ�@s�Wq�G:N���y!���8� ���-;Y�=��~aK������f�� O�=8�i�I7�cJ>
��'/�e�e��o�p�u���CS��Z5V�+�G����u���R5+#���C�#��=�D�; �cU��sG�珽`g�scχ�N`ш�ؼHj�~eӇe��h¿�O���s8��_�[�얡���h��><�n!H������o���F%*J�i@ ˎ3	�! R'@8@Hu`�x�s��۷��&^�p;�s���I�������Ñ/�l
}�e�"� e�i/ ���Dq��|¨&��7r�8�RG6�B�0gy3|��E��[ l;~�g �s�M����ǅw��'�p�m��A(@�*"6<��%{���& �>P�Nn;���/9���GT��!^~8l��p�yD-p���{N�&!�ş=�`2{� #�"Zl~$�jxRl�A�\�57���3�8
���	�l���'<�d�b�s�d0���&k1�C<M�v��o}��Fp|�O�d6�#���$x����-ߍ��	~3s�^:{:�Aq�F���3�=���{Z/"�Q@~MV-X�	x�������̀P�����'�KB��ofևx�����C����K_}�+6#��`8�W����7��~l�V���×'����<B��Ԛ�6��i�VE!�ь��@�� Y�:��-�B�#\(���zu��!Qq{.B�`���g�&�o� ���1|�q�	�H�"���RH2��Kt
^bL��
yk"z2~�|�\�:�wrwa�z���\FCƠפc$�@	h�%X��;L|� ��e���\��4�
 ��Ć^
g�ӹ����}�F��5��ؚ�?Rݝz5�7z3��4V�W�� �Q�K� �����`/bګ��-���p�\Az"u�X�N��@���Ϭ�j��X9����F��ʰ�v1���ixvp8�p��4x���}��%�����<wGR\�[M!`E�_��E@{�fǀZ��9~h������c��B�p��%�\vC�;wLa�~:���V�l^�b��]Fi:�%��yfvt�A��8����5/۽1l��ǃ��ӯ�>33����%U�0@H���Z��֎��#؂m�c�r_
ϥ���$���&�9�Ϧ�̊�@
4��l���]��kh1}���!{Ϟ��r�ėB,��@F.e &4!J%�����/�_�B�ސ�� :Θ�� b@/Ar
�@�����;L@�1���( D�������a܋Ŭ��Ê���-(�3�&�(ۀ��aM�@�A@jS<�IW^���/^p�9
DD�c�z;n�T�j���/ҧKp �#ܞ��a��=	I2���mXbP��!n��������d���r�P̈́ɞ�y�$��	W�F!{��^H�WD�'?�|c�s�`p�i�;���*\
Z�jlh֪�j�rF��4�#]߃3�R7�Q<��2��.�����~��)0�P�(�OT�ОݾE�a�2�[EԵT�n4����@&g!1l��.Ô+������;]p������ԫ}� T\4�6�J�X`%r���$�t��M��+d�g�@�i2R�w�U"�v`?"xi�LW	,�~g���qmY�[A����"�D�m�(����v�L��K\���V��1>�k�~��&9ϴz��A����������0��x2�>�?{ݚ'��Ѿ�NѲ����c���MQ7te�X�Y�v����Tl��$%q*�@�Bv �h�x]8��.��q*1@��2l�FڳG5~��(��Cσ���Y@���Ԛ�a�#���|u��,�M��I��D�pt�"Qf
},�%�p �-��X���O`c����F�� !�F�� LH�3J@��_
z��Hf�
��όK�����k�P�Y�0�h���j�M��)`{�Α���w�����h�}�ra��bK���(�͉tB�n9���(
�`�/A�a�r��"P��[����2�K�W�B�t$S$!�8c��8E�1���2�>X�u��q����D⃱�L4���`є���4^ycy^%�W�AR}D��+Z���\2P\ۉ3���s���%����m@�� �@mқ�c�iTU��	d�+a	N�A��v&n����4i���r8w�ڎS�z��n�&�������q�͟hʪYQ��_St�қ�0�]fw�ś��"D�_����^��},|( iq��@�H��� �4A����L]B�7!$�RtL �9h,¯5E��d�C���L����E�p�8~6XI��t��\�>�T~���Ĺ�~�j����O�¦��Q\4���J�T�_mC�WU�r��熴F �$<���u�@b;�G���Vg밷V��:�<�Rt�hJSk4Te��U�~y��u;�n�_�	; �v�zp�w�s���t&�vz�G�����2�LZD������ ��5��< e'.:K`;�%i'
'y;�}�}5�X�af��^k����iK��� 
pr�55g�n ���e �̈@�ȼo'���=���-��K}=��{#I�8��3�1�Fꥀ�� �������	I����E����	ʒ�\��,l������0@�LD����0ZS� 9I�YJ� sR��;���'�P����a�=*X?���"��K�� �*�ƪ�V9&�w�D�Nr �N�d7���>�Q2����o�%�Q�:|a��dq�?C�����������'_�������J��?�r�d�p�ɾh�E����D:v�R�pAV��Q��twT���n�I�rI�t�
NJ�9�~����0��?�#��T;/b��kw�(B� �X���^��Ĺ��h��pc�Ԇ%�!�	����f^'tߠ��R�{���f�${|��$����6Z��?���(1�
���"�0D��B�%[6�/�Ťm��=�l�P��������>c؝�Z����鹝�IY:�/INݘ�u�l2\�Ԋ<;�W{�)��Z�pb#��u�]}����>(x?�~�nd�qp��0�$魩)�i5��:��"���fCk�JCiJ�n����A<�����UD}M%hn���:�N����=����@m��Z�n6tո�u2�/�i�F��ŗ~(� Jt�1��-3��o���~�?2�B8fbK��fk��o䓅e�7��xv��X���Z�qpG9��q�f⽋23e��+�~��d8dq/cz��>P+�j.3!r�s؆�4C���iZk_���r%�˦(�e�h'���H�����~��$�b�j�X՚*J��p��#`�mH��a#Z��ț��^:^��9���_���y    ƣ7������V*a�lw�������.�7R/����jh­�8B�c~=[�@
�z��Zĸ�4����|��f�55UUPL��^7�u�е�i֭z�<�&��K[AL�(��l��jFe��S�k������ >]L@���0C��������cW��a��f��,-	�r�;EoE(�Zh>����rA|)Pn��!ya�ӈi��p��)�Q�~�ڷ(e��PO��W4:}����nz+a�m4!(rBf�%dC��<\�n�lS���c���}�o� �`�"V0�����ǆ5J���)�1w��;S�0{¶��)je�hN!YY���1^ �0Z�捄E�I"��_��}ck�.$<s���f,T�xM�{/G�d5����NyC�!=v��aF��0��`��9X��t߬M��#���>�܆�cn]V(�k�Z_1fUA�>�lvZ=i����m�O;��8u�vu�s<5K��Y=�X��:�c�a:���$��("s�`�vq��_��o`�<�"C�pT��q@�ޘO���ĢQM�Ⱦ�e�� O �+#��c�:����"K�Ex�[���L�Wa�� ��GV�����N��o�= Rcs�X�ެ ����P�n��c�LZry��E��/瀖|��b�V�L���Cvհ�$�a�����3�������۹B���$�9�OԒ*R����M(䎑�9�I���#�����BW�o:�Vϻ�_د�fk���9ۏ�?��5,C��������m�XT���x#�-��`(��ԴxJzPz7YT�H��u���E��r�Ԭ��ap��̺�*�a7��z�ԕ���j�� c�%L�R�̥�]`[�}��er
��3�z"�HD�7O�O@˛������g6˱�L�}�I0��XBv\�"ɫI }��D�����2�r��A�]�)�!3kc�
L",�b�x1�����'��G<7��C4/��#H3n�{\57�	hT@e�������꺪jT��`���&���Үޫ����֝'�s/@�hJ���\�� �F�R��}�6��6T�ڐ�o0��=G��e#fJ(���m(�96*j�l�,X"����W�@=m��������	�.�4q �{iu\��)�!̂b_@}�LCo�G�'��oI ��� U$�{)�E:IB�-7&K�l�t�AkX`&���i����
�_��K�z���-�� �z�l�eC�N ���� =�(Q@�֒́��si��l�)�!X�� 3��"䢃>� �X4�R2u94�_5�C$1<p���^�&���  �1zr��sOV��?x*���z�!`ڴ6�Ѵ$t���UA8���z�}PV�[}�^v:�cʍ�H���`K:l�Z���Ak=u�{%���r0LS�@����I��P�vz��A��pC�[�dP�@w���#�t��ڀ����,�:9�/9^!��1ʼ��x�H)�O o Ì�"���a��̈́[��$�št�E����=aY#ܭ�`vʌr��(��%	�q�D*���L��r����\��ad=�5������ʒ�]ܩ�2�(���=Xc�(Z<��$3��<�_�� �,�m.��S'%�} ��͛9st��[�y��Y,�#�p�����sX\�(Z,$[����O����X\%Mo�ױ������v���>>���W���<�E��C�������a�٫�R=��^�.&�����@�j����P5�$�}�XU����,}k���iV@W�<��X���,�EA����)��І�6xY.�Q��M"�^g���>��]W�)�\�d{&`#Lafl�g��DX?�D*���$���_�K��m��Ѐ��P��B���2Xp/�y+�R���;�Y KE�Yb�b^��oK
�Q�Q; ix6i"T W�Mg�)�@���4��m�����yW���E�]��$�݂S'�W��v�{�����%<!�(���?�0)BhQ�~�t��O�H�����(��Õ5�~��GJ�ek�A�%Н�/����?�`$<h@�6LuIx0�5��I_@Pr���-�I���[�(�Zf��H�ƣ��a�Nk -��or�{d��(��g���	����n(��8�5Î�C1]e��/��^;<_�-c���p�E��\\;�H�Cr��1�J��ŖX������a� �����	�Hc��=��!&]ށ%E�آ4s��9��7�b\��Jt.�����X��hI��sL�0z�����Z�}(����j��6+Ǡ��_�H��(|��UC-Y���Z�a�2B�������ɤ,�|0�@jMCt=���;~}g%N���#{2c^x���~2f:�B�o=�(Rz�5��f��鮠��G�vc�"³@�����n�b̷��%�.�Q��
|~���.(�4_�)p�#{���
/�N<t�|���fJ�D��},�^V�̫7dz.�5�j�r���vS{� 6�й�3��F�Цs{�>ȁ�m�,;��%_ȏ�@[!��1��Z�E�#e�p&P���,��b	V���P>�/��u��Z����� t�Gje3�= t�ԟ��.�,��p�:^!'G�5��0��½4��M���teÜc�u��<�����Z�K�a >��.Y�^�щq
p;�X �:W<Ar��X�7�9#�_��bT�I}�k3PL^�N:�ԕ���>z'�h�|��pL��n�|<����jnt��$m
�p'���!�=?�'LG���1�p x$�~������<�g��TJ-F���-�5�\���?�-W�S������|}�|ƟlH����� ��A	�V
��$e��RY<�A9��5@�d=^���*l: �c'���ƍ����0� �H;v�bk'v@���<���/���(F��g���Nhx@ �<�_�٬����ᄈ�Y�r�P�&iWHs�ƪ�V�a�Ӗ���8�<�ᛲ��"��#��e���{�����x̌��<A
�	ΉOS�tK2�P��ɥ���tCM� �N6V�׀�+&�I+_��f�H*���qH*� ���r�L-�z(���웣,͝B���x�8�c�bU�&��Q��)��L�)�"�o��|Ƴ�0:'�����1�`6�\���e)}�A	l�� p��A�t��f~}��yӸ:xu��`�Ŭ�F)Ѕq<m��V�U5]d;dI��ԑQ!Ǹ>��KI<�Ph�Ь7�!^+�p���n[)��RQ�G��A��Gp���C �E���D�� �z��^�v���;�X��̓҄���nHr�clƯS/���PNҴy=�*� I���s����бA���M�0�7lAr�]!<pO^=@�p�h/
�FtHE��.�_�J���/�1�]`��#����	���rC�G�W����|����&���_�g��Rbh�D��b�G�� R��Ș�J�^�duP��� B&������s�) �
&��pV�
�$O���IS2���G����y��5�[����{��KQ׏������}LƲ�Q�ը�uؔ�n ���!г�����i�b\Fa������֛A�=��PR�J1�<��
IIyp��T�a�&9�i�1/#ą/�W�������˱K#�2��y �Xln�U��q���R{�r�����`h$�A�v�t�y��"y���g��5ݑ���X/��׍�=#��<�(N�M���7ia�>ӊ����lk�E!�0V��]Ƭ�5�i$��J�*Y��J����a�B�SF>���R�����&DFsxT*�V�GS�sHϑ�)e�G�O�l�$�O��5�El�m`��2�q�p� �
���x\�%����Ѧa)ŏ�5vOE�H�a���Y�o>�ъ@�}�C�k<�;N�$�X�(	q�f��^���H䈺(h#g��HC��uy�,������M�w,;n��gq�^�Q!Ug�r�(��l�AX����;^}h�	X�쉙r��}[��b� `���    K�3��<ܵ�'^�!hm���%�'��Ƞ����d;��<Nl@��R��?+j����LνJr���������
ԱH�a��j�J�
EQꃽTy��"'�����G6
n��R�	�P�Bb���y@3I`�y��@���4�/�J;�CGT�5Y߱����ŊHHo��f�I�|R'�Ť2�T^Ȯ/�I�ZC$,WlqɎ�m46�K��wj��-a6�B��ݭ�g)����r$��xU^�t� �+F�	1�8!�o��V��sp��c����@N�V-)m稵G���� _4�;<���Ri�Πw������(EAFʔ���	�l%F��X�/��˅_���W�*8���,�O��q�X�Zy^,�K��=��Nz�,6R�yi��Pơ��i�@��K{'�m��@f�v�"g�f��j�ʞ]��w.T�JW��Z�� !L�(d�a6�]]���K���<�+3�䚝������}4zx(�=Q8�Ò �~�t~'ş�.�y�2� E��x'�߾��$*W�K1�f�|��#���J{Ҟ<���="� �eG�olb?Y�j�sQ��x5d� �ҍ>�\f2D�S{��8�������/����|_{3=���ޛ�g'�H?P^��Hϴf�����+o��]t���O��O5Mo¢L���8a$Oi?�:T�Н"��WX�K?�_�Hۆ?����������}����ܞ�_6�^����֮��ys�Z����$~Z���c�4���������X���:R����{�*��RUSi�-�a(�"(rjs�XUW*��=Pujc���8�1
aдZĉ��h�P\��t�l���|�X	3W�~���0mjB�[��W�b)^���(^A��Ȋܬ��y�}�|cUЋ�.�4�îI�c�͉P��6q���j)� ��_K�#@� �a��i��VN
dI��+ An��1
���������� O^b�e?�\,Őމ��(��!� Xy�P�7����9p�|?�yX^ub���8�� �HF�4V����k�_��Q�P-������Vթ�yLȼ�@�
�Q*�0��-�C'��@F.ZY��ꉂ�Wo���5� QK��g/Z��s���0�4�H��]�����V� ݅���M Ǝ��n�D�KPDt]i�@t��+]��|νl5�h@z��=HEo�B��03�X�,�0F�j�.�s& ֊��i�9ͽ�X�	db
sǦ�_��=?��y��k�O:����s�q�0~RbQ��r~Et����5�J�a��<��W���A��F�����j��k���Ae�9g����
���1���,Di�O"g?��M��wɅ���F"Z�nDb6�=7܍�6	e�č� m�_4ՠ���9��)"���v���\4��)�b��_��܁�Q����4���0	�����Cs	��<gf}*\�y ��C�#������/�#���Cm�)/�[�*��L,'�Θ�3O�M^�Ƈ����������ipT�ޟ���b����Ui *�՛ym��XU�+����r�y��A�x[h؝��	4
9$����\�Y���KI��{� C��9�n��vq�Pg����x9`�q�Zc�]���ϐJք�I�&-�����_��Ƌg��>��5��)Ċ�;�	޽Rir�	8������s��U�A�p�Ź�n�{��z��� �}���4�ų���@H�ʃ#8�v���9q��[/U���L���@�;.^��EX|��Wz6Ȳ�,+�}�,���U���Q������^�il(R��C�B
�1"+�o��`�f���h�8A�4/�����_�i.&
���JŢGY�SiB���!I �ҍ��G��0��REN�8-?�=��R�A
4�U� �ΰj�QW�\f#HG8���I8�l������m��c9sV��6��_��Z�S��5��Y��՚k����uT+3Al]eaZ��Da�j)��$58�Lψ��O}u(O ��O�j_]�2��F�W7�t��R��v��jTpu
Pn�Q�>�P���Ő�(P�B�:�,�/`�)<�důaB���(�鬐6H�NAB�P��aD�u�"k*��c�)���n�"E�$h���C�@��^J�s���b�wճ�w��[�} ����ۣ׽pv=S�Ж�Y�X��*�D���8�'����_�iWh����`������6z/���,=C��7�t�΁�U�W��4av�;!=��%il*	S���~���������?�����RX1o���p�ݏɰ\�B��ë��r���ݿ$��ȧ���|���u��
iY����fz�����)X�d��`[i��Y_0b[`�_p.+��몱n]��x����Y$���U�f�R�aZ��� �* ���B.�/��d�����#鋌.���=�v!��$EQ^�>�W�#�zj��2�B�Y�&H��|c�1�F�@�G:�p��!�X�d�J���t#czS�޻��*G^��/ֱd4��w�?ckso�*Q/�u��l�_)�#*����.)��7�ƪ��^Gw
��T�AŅ����Au�;��i~�2�o?����#И?�	���"T�զ����ܫ���m��t�kDm4�޾u�ʣS
)�J]�
���Dn҄��~�^i�������,_��ߓ�SR_X���vx�4��۷@T)��G�\�է�B����H�ٓ��%65��U�1���G��+WN�Y �.,�"��Z&��h48g���E�"�x����+��\��B8s�Kj��O��%3,i����srCU���e�Vlrn_b`�u�,��	E�0�+C�&�n �S��i����-���P�Eގ�}[Ft�K�*�KhXFLY5V��hq���pR�O٥�r͏�bhMs�]8�Y@�AH���v|�cd��)�Qj�Wy����'EL��M@p��,C��� �"[�������/& 9,� +l@�@)�,_�R#B����B�}/��ݧ�m�R�{��m�a�	R�ZaLD�Gل�u`���N�y�`K|���!��|q}͎�|<�,Q�����0�_��$��N\]��C�ɹ�u�ܧt�����[����+��	����j��7*m��BboĴ�H��y��������k�~g$���z�D���/�`�>eb:Yk�� �4f�o�Bf�e_��`	��a`��p�f��_΋xF<PWr�Y�tv�[��nM�����Y��h�1����;>��P�UcU�Y,�:��bċ��J^�Jgk �[�G9�7J�p�u�Y�u2^7ԛt�G�*�e�o�|f�T&x�h�̓�J� ƫb8��^k�F}��	��r����|-)�,	�G@�U��w�f}C���
� ��1�˨���H���,6�y�qeދ	�:nB���B�sVT�J���-�9����w� Dn��~~�O�E�NŢ˼d6����Y&&����&&>�տ)�x�s�B9\�zpK.w��Z���7�sz�C��T�ꜽx��j��{!wW�UL�-�lP�+�$J*���%}�^��$,^;4T��~���N:���>u7Mڎ1.�x�6����w��6�ι��H�0���[f���&TY�&�Qӯ�j���]w�Ƭ
��t���f�)p�C�9췞�Ɠ��;�5f�aO����Ώ��{�C8���\q�+SL��ޘɈ�:�~Ţ���ЛUL�Q�Lc{h;�S��4���h4s<�kfCmVS�ht�����`]�q�<�&�1p�|�8 D�~��V��cUC��.M�Yفj�s���}Y&�tUf���n��?�����Xf<��N���RD�.x�Uj�ڣ�,]�*�<����9��,��e��D�`�w�ɮ�
E9lL1^a,����x�C�(1M`����>�E%��(���X�������ʽ�� T�kF���bYM!�'e�(B9ؔxm��IӔɷ>^w���Vw�b��nv�_��wG���Uv�Kc�L�SGi$��F/���?�������_�_y�5N�ev��Eދ�b���X��+{�� �V�x����%�8��AP,2C|>.�<K퀵�    ѩ;�3�%N}�cXu��-2�E�]���Gj/�@e!Y��T�]a�v��+�X�:�
�u��6Vp!�e��Cn@�x��,{B�ۣ[j�ێ)4���v5��uX�(���Ou�1R3s�1��w1���#?M�0-��=�/�x$>g某ق�N��a׈E�	*�u�����p�ؑ=2+ϋ���ו�:0uc��C�ΰ�R�a�ΩG-��!�U�n=$}�R(%6�*�c+3��g퓽�V��X�KS�{lñ;��a+[�pK`���1�>�5-���;ؚ0�%A
�èh�j(�a�#&�a���w,}���x�r6�q��锴x��y��5�K�k�C6(fݩ-����:,�˥�nV?�f�b9@�n����+ڏ��	"3O��WaD�.J�%��2y��=�|CMʯ�UO�q���^$j��X,��Ք͹��`���i?D�����N�g=YM��Պ1�.�pr׮��0,��X�-�bj)W�غ?z��{��pom֪��aV���F��G�vH��/���9/$p��b�e�0�(���܀���5b��.ߎ����C�eeS-�G)��	6�d�k'E9*�ҘEİ��K휐������{_���Y�W��j�eo�+��b��Vo���
`Ϋ�������̆g���Nsntύ�����ˋ�7�
��a����>|��A��n��UcU��������^uӻ�u�z�g`k�.�/��⡑��\�A���b7�H��dXhCl�Z'���K��2g�����^XS�����$�S�b)�^B�d��)b��8F�2�z`v8�ĄǊ�)�5b��[N���.����G�2�����fqG;�&AW=�&���8�΋�UT��RyLg���[b�|^H�O`�Fx�3O���S�h�rLC|��Qk#���)ۦ�Ի�x/"ԋuwcU�
��>엎�Q�pk�> �U�sR���w8a�yY�h��Ɛ]-��ܵڝ�N��ؗ������9@�Zmw_��u�?�����w��V�&���R{�����>^��m�z�?�68K�<���,�V�%���SZ0z���Y�x��OK������٠�Vz1�Hۭvw�{�g�gm��$b[�:�,R�ce�ǌ�����Ȱj�j4*G��y�d٬w4o�|8�b	�w�֮�rPQ��b�l4�aq
YL����C�������Z�lLǹ��I�wkH����fz�U(�)�2�d�rXK�]GU�$Ws#���<�J��1����;��6�w����R��~���a9Տ=b	�}�Y�"�S�^�r�"�=������MTu]���ǉ ����[�k�x�ߘ�����۴6�L��s��Ҝ�7/��˫�>99���VO;p�M��狞v�;8O����i���<��>:z��o�}%��x��3�"��H~a��U�Фp uCSV�U-��N=��x����07ٷ7�7�����K얗�c=!�t�	�V*�W�L�ndM�,f��G��H:�QI�s5.��|Y�P�����)�.����og���X�9K������*�na��x��TX�&ܱ����`�p��b�ևG����/T���˅��Ѭ��*�kaA�d[N`�+�<�#� SgHhE����T,]��!�G�{dq��`~�?�ٿ���~����K����_��s������w�?����^'��?���_�o~^�D7i>��������o��|�w��1��࿃���_�����%��F�y�y��U�*���:Y8B��^��=��Ǯ13c��ù[�;`vLܡ ;�8����=la�F' �Xm�Pw��q�Ƿ�
�	o�C6P�u��]��16@m�}Q����(-�`?`Q3,���(7��)f�1�[���?JḾ��x�_p�ß��&q���T 7����r �{q���/��_�+P�������S���4�P��W����۟�"�j�_<�q�Q� ˋ��t�	}����iM,������5�	���&�L����h��#�+~�q�!S0T�f��C-LмW]W��]�#�{�y�L�Q6N.���v��e���S7b*��Z�d�[��R�NA�ޫ�ucHW�x��dU��{s;Н�_}���n�V�Y*���%�.v�M�#Jf�S����w�"���dz&sk�A�]��9��n�-�)x`i��JX��Cd�0Kǁ��9�o�KO��
�͋^_���P{��uI.�O̾����4Y�_=;�G������W��M'��4�z7Ǔ���W^'�Y�n0	 J[{) �ƪ���W~��C8��B*[�EK�X%7���fCՇمC�9�9x��s�m���17�SYɼs�Ӯ]�v��&��H��	�6�GG���+in6z�Ƽ���%Pd¾�r��RVK�|�RK���:��I.�"0z��a;C�<"���}D���Iu����~مόIX��g�x)Y#e���;?�)F��Q�� ��<���@�Ȼ��Hf6��i��\r:��G��p*����:FT�w-ŉ����ƪ�RV�={�!�=R���U�yQ57�fSך�e^�,D����Ϳ�+�|�"H"nv��I���H#*;��s��$p����a���qD�X�P�vX���������s%Eo�J�%
a���^�N=����s�Z�\�h����Z�̩q�!�.ۇ/�gMڎP,ƺ(�6��(LK>�R��B�.~��h�so���"���Ȭv���E^?{Q4�d�D��˓M�ɇ���@CG���f� �>�6��r�/����8MB��oh��`��s��ͦ�Z]k�aX�Ǵ.�qHL���?�[��K,���>ǁ3q����ey�o3F�#}Y��S�h4V���E��覮<oԷ��曖���./��I�77������G�g�d��u��?k����7��C�mg��_�|fu�'�ik�������|��i�~���yz1��{����f2��W����� ޿�������˛ͩ}�\�|59�o�'��|���_������h�+_�����&O��$��~��w�K����t�K��x,'��������u�?��=��f��hKyv�"ҵ7�Q��~��gA������f�f��J�҃��:i���{�כ���i/qv�&�������<>L^>�{J���g�Ǝu�ǃˣ��lo�L{ss}��֋��*���b f^��4V5�Jwk	+zR�Y�*��-V�0�� ��pN��7����
�V�t�R����r�vo�̌Uz���h�3�5c�P���Z��T�W�x~����B�T�r��� M��T�q5i�#�'�H�^2�� J�G���`�I�=��e�?��n�So.�5����j�~(Vd^7 \X�I��G�����D�#VO �#*��W8��]���5<��rM�&�K�G<2�ͱ���j�1��	�Z�.���w�����ɰ�?e�E�1��c�s�]8��K�IfGa�������n���o��@>sפ�\�٩e�n+�Udz�xJP%��R::�����s��9 c��bΆɰxlQtz>�|X���^�Yґ�c�>�������Kװ�&\(�M�s*Sx��5e�|ͳǬ�$n�Ef_�k��l|�<u��u �it�.fap�.x������������P� �lL�д*�-,Ҩ2��Ȯ<�Z![�cD��P���3�o���XCq��.֍��w.�eUxENaa��C̚�#�O�̮-�ݎ�O�Z��Y_���p�?�HBa*��˸"���¼O=���h�=���:!T(���#?�;n��Mf�N��K#���\�}<py�3TT�p��m�^S7�Ɔn���jj�ɇ�M`�=�H/��"�#j��@���]rD��1O&M�,ܛJ��4��=����{�&k&��n�N'�C)������	t� �3��d������c�31>)6Z�bp����rG�.Vb��0oz�UK`��'���͍��P1\W8�w�;m�ܩ� ���>�y�e���ՒZHII�Yc��V
��S�]��I(�w!<��}�&l8���tfMQL]_�6G b  ~Q�mN�Ha ' 2o4U?I<�j$/�=��]�j��c��X5V5���c���桤�Rr�ux���5ѝ�ͪ���r]j�d��R���5USԥ6�m��/��?w���N`KG����n?�FQ�EG�A�\R^mֵ;�IK	�h���~e.�ǫ7�إ���Y(޺j�� �E檱�i.Y�1P!"�2',�yA2���������D��C�i�D	Yz����yȲE3��Jbt�۩���<�J����VV[0SQ�j�N�id>���M��;Yz�Sw�7��٬���kK���o0��K�#�����ՠF���6���1�l�h�v����O��BY�������Y�#������<�:*6J�`� �(y��iTD���K�6'�%��"٥��^�+־5�+�tQ�q��|7���X|�q�]p 7ߕ��1_� �Gl�W��	P��,��`���Z�a�1�E����j"��Ж	1n+���1������+`�� :ͻpm ��W(�~�W���rJb��q��oM��e�+���� �:�L/�3?�:�@�ɝ��^�ߒۇ��r̀����	�e���~��ǙS��9��ש�3<�%��&���(@�F(d�@,[
躇�m�olMuC�W�UM���~�nSɮB��x��t�!��(C�f|��z�
}7�%��0��͋�Lr�{�D����B�`�w	0+4Y��*;]�3�&�l�w���hϛxTIt�G8S߉k-��(��aYy�M��3���_�^�ʲ4BcպR9ݭX*_d��B֌rdSK-���`.�x{��Ƅc�>�6��R���*���\�ϸ��-$-�E���t8��X0LV������`��R�+w�;���&TG���V��y���~��cQ�Xc��c��k�"�8����Q�/l3�G{���Ak��U�5{�V��6����>�9�"��}^���o���{>�e%��N�ܨ��� �}�#K},}���t�?f�tZVκTi���k�'E��?�U�������{��gE^?0P}�����u� )?z�zbn͓n?��.�/��g�[�A(�F<�O_�'݆uѹ7 HW�Z���j]�����<{�D�
P���[��3��+=w��N�Hk,� �y�Ȇ.��+Ū�f�Ya"�4���Km�D�:o`KwN��v��c�W.��;��� �����8�B�63�2B�GFP��j/�(̚u/=�%���ʍ���A5�[�&�x,n�՗%�4���`(�T�}oV[�Ԁ�U8/GP�F��Ҙw��y�y^hV�|�zp� �^�����.ͻ\֢�ҍ��дUcպ�n��3� �F�(����"����sfUΊϑ�*�z薡�&!�Qc�簮Rs�=�Zp��飞��~�G��_�Z����z� r�i��_�	����aM�E�o�*<BXJ���LJ��xu��C𣲂�^z�&�>n6��V�T���f����f�Em4���IȖc]��7/���>:���W|�d�׵�~]6f�͵�e��,dW4�x\Vˁ̄(�O�
�2���"�wU�+�D-
�O���K�h����i� �n��/���a]�	�+�c�h�x������6w��e�68v��o���,F���)%XT}�-�(�-��1����s������gD�#�â;Y�s��1��B�؛������Pz�"E�2<��<���m*��U}��;xqu??��Hq����t�	��ó����dq��u�^>۾�����"Wc�Q�)(�U�f��{����#���/Qo�1���0ϓ��"��������ʡ�,f�	?*`��R��m�Yi�B�&�kj�d�`��
�U��h�ٻx�Օ��%�����P�e�,̜w��x�<ˇ�~c�F���G��
i����I�X���P�ݫlJ,L@���1�H`⮤�Y�5��.u>9����9.�2Y"�r�<�7�.�pf/�� p̲�b���E;�!e�J�7u0ÊR�?�X�5�)p'!�A���-�������)���ԟ����t�ޜ����ป�/Oő�N;�M�x��\W�g�z<�Y��/73w�D��fx?O�pg3R�qx������CT��u�2�K1: �3�fU�LB���+�Y_*�Y�����D	�[d��|�oid?f�ѝ���(_����>���ңaĘa�����y�z��պ~o����H�R�H;�i�T�9�:}��#�t��i_:�N��#�ş�޶�#;�S�����#��/M����NC��.�lLm���Z73���?I�7��F�����3����ڶ,m��ҶO8>j�������/�n���^F����u����y�;��g-�׭�8��;f|�lG�{�#}��z^��t]���"��0E��_'�O�§�N��N��A���T���BI�0�-��VE����	2���Q)m3�d����w��bWKBi!�2�k����L�8vys'Q�7O{�p�����.߫����Ҽ�5�Þ(ʪ��eT�=�w@��C����Č��>��v½�l,/�A-�(��9d�D�-�D��u�}b�� �8��Hrc�
����H��_*��-� ��e_��>�����Vne㫨y�o\o���ovo�)����o�Mi* j��Z�J��DmH��Z�-�云�����R��[�f�Qo�]2��SZ��΂��6nT�Ih����ȫ�pNc����^�3�=J(���w/�I@ʂ�ik�kg� �v�祣�f���ķ�����J�^T�"aEuCi��Zf��z�G�A���ם0;�օq6�܎CDў���b�vh�^&Y=����%� ���m�[�{��a�����hi3`�f�a��eh�,�%�y���3�����r��%/ĒE0�j�ټ6����u�T��Pr�n�`��g3�}w�\*}4_o�4w����;���Q+t�l�comM�/�����5퉼����\�����h�����n�9zG�P�ɠn����.�h���E��y�]�����q+'��2IT�Mm�]8��jm�B���D�����1Ld��M$kĐ�;��Uj��!�ë�:w�����Yn����]��^zl�,���H������r��H �����/��d��-+Z���vw�l'oƯ��\>?�o���8��5v{�R���l?��dtr�_�'��ѳ����|��^I�����j�jY�n���>e�z�dC��2T�=�ɣ�(	�l���4����_J�,a�4�x�\�~hY�(}�����T:���bΔhy^`(L�K�*� ��պ�x#���{��)�z]�FY�4B�����ZS��LDlN�X�16��t⒙���Ҩb4�Q��O~�!`��K�B@��;��F��{��^�|s��9H�����h(�]/���v��^O����Ӗ6ٽ��&�nl��������M�;g�@��:R������n�����]�C)S�0�ƪV���j��9�U����D�]���ͣ*A��(� ��QK��)|f
8��B�V�X���Ͳ��j
�G:���Ri�����a���sg*|�2/Q��x�n�����b~��ǂ����/��R]�ŋ�;�PUiv=V=en�B͟b��dy�$�����k�
��f��{��Om�b,Ɨ�<Ry�`a��y� �d���m4�g��C��OF�B����_�Q��^�}���#4�U-��ƪ�N��@�Zv�B��K1�m;�����J�_VE����K1�x��n6�!���b�ՕQW/��#똗�� �_E&S2�	+��&ntE1��`y���B1[��ІO��Ŏ&��7��y�2���u��+��ƪ�V�V����/      �      x������ � �      �      x��Z�n�J��N��� �Z�d�_�Ȳ��;9rN6��ْڦ��8�01�s9�GȋmU��(�R���X���"%~]]U�W���������\?��ͳMQ��X�v��(�,+�hXp��t9�Zc����i����Gw�5+�Fi�~V<3�gD'�jU����ذ�f�:؈bxc���pngӫ=��`a$���Ŗ%�v��;�;�O��c��#�	"0����(������fry=Sn��ɍ2���On����rA��$dc�hĲ|�SM��&j.����[fb�Ѥ�_o�iA�2>�d}�vh���F�竖�<�.m���oy5t���Ԉ����B�0�H�"/R)�դ�Iw���7����)�ñ=˲Өw����V��slzc���,}l�?��=��V��Q&�q�;��ђ&U�$Z��{�*R�Q��E%�h�9�y��a��{H�=4T�U{L��(�ǖ�-�8�RT�B:O
x�e<��P"�\��f��cх�i����G�'4�F��
��ն��A���p���5�cM =��i@���&����(��Ąv��t5
�q�b�1ڗ�����O$�Rwl�c���Z"�yw;�N �d͒�S�7r�C�����	�#WW3�`�!?X�h-F�&� \L�r��\>r�E�'Q[
1п��Em�e�zN0rߗq�pxш& }R��#o��M2V"�D ����z�)W���&!.	��M.S%�b� fL��ͭ��j�k����i
��p_��>�\�<�h<Ӗ���hľ�6�6���?��pY
� ���~�M3�-{`tR���q��q1����b�+������p��Ҍ*��V-�����d�̦'W��/s�#X���
�Ѹ\78�v,����ٳV��@5��Z���m��}�ޣ;�<����BZj
�^HB�rR��*K���u��G���-s ��؀C�1�:�eA�U���+�:���̷)��2� yA������e,W����OU��������/6��1Vvx���gq� Τn/-,l�A�F̋[�Re��Re�,FBY7�;��eaz��IoK�t@ǘ�MB�4�A@��d6�_"}����D�����~w}��2ė#�E�󞮁rm*�G�8�U����-�$p�P�D>�y��d�S�A��>�n��c�e3Ѧ;c]�=7������[o�.h�A�"����ߡ�������i{�-����Am��ZP��Dh�]�#��Ab�D���j��7�INϫ"��F�L��=!�Ԙ媔v�Y4��؃6ć�t2�.Z 砺 �i4GޥC���y��0G2�S�	�P{�A�D�Y3PXoe�'K-Z'g�%Y�vh\~A��!
4댱D��b�ji�̲��S큧��S�F�R���Ha�B��4EB��4�!/�*u�yQ�����!.l��gWU���?!p�� Y@�������e�ڠW��~[�D%���b��{Eon�^d�]Ԯ|#��;������3\%#����+گ��o/�o�_�w���?��}X� �����Z�C��� �#^�U�q_v$���6�2���	V�o����'*L�I"+ǎ:9JG��UDL� a����ǉ��"1̶Kz��a����.�{�Ҥ�43`9��/���Y�0!�
���v�"eQ�$�,�O{��)��#�E�/\G�%��L�[jտ�m��c�\��?I{�yt����3+i�B��Ď��ڬzA��d��+��΃ІN4,�x�BmK��ꢴ�DR̒�6��M�s�+n��ıAc���-�%�Y���ɖk�x��/�U��HI��M�f.\m_O���&|� ��t<��͗��H�e�Ae�?^�YĲ��E�F/��0^�f�xJ�Ň��d���yqa�/)t��5,���FPD×%��i�.�{NMp�w1��N@�~�b긫9�F�9&�T,��2��YL���)<��~������+@>�k�����? ^���L%�LC6�����2�m�����X]X5�v][��y15_\��Z�J�T�MHP�@��%H(^X��O�U3��*!�/�Wo���(T
|Upn�|��=# ��?�ya�_۰w�Z}�aUF�e\�ԕjq��dG���#޾�77��1Я�i�������`
bZ�6�iW��U�Ε�z���s�mY�N���O��}�8��b�m2&{�^S�����f3c=�����`��C�<Z�㐅��g	!�>(�L=�W!n
��9ط*.>yr)&l>�!�i�~��b��R9M��F�f��#�sk��X,�c �d�_�]��G�g���и��)�[�AS4N'��0�:N?AƲ\���.�b�v�U<��r����9�);�,$?��69t�c����r��[�e wn���!O�� Q�a�$��_��l��:���်8MD����ʑ�C�|+���@�,ҭ���k$����nv�x'�-����M�����z�@�hXs�����@� Ϣw=30�>z@������?:����Gl#���H�<!M9��Ԣ����ɵٮX�ɵ�(��6��ŵ���1͕V`v���Ť�&��"��{q�ea��GR���|<�~`è����s�V<��1�Yq�#(w���a�j���WzD�d-�1,/��S`pFM�`�%�ce-H��[P�9��8i+N��D��np�ka���HL�C6t�"�!�IAy�cKH�0y^e��V`�0٧"bIǯV�Ew�k��z�{��.^�7�6"�/��d�P�����+�?E�W����[�N^��u�e�!Dt�O~At�������{��ENy�$�a{��r�������}T���Y%�1/J���p[h�i��1�b�s3S���{��{T�=��L���cv~�K\�o�8��qUR��y�n۪�RuXY��8�):#ϋ��*s�PeV�v_�Ŋ���g�������m��3�*��|��-��G��z�>ET�?BS�����m��r,�db
q�	R����YZ���,�V���������CksІK@r�~��� �ְћ�-�S�jŲ}I�����������6�tO�챘�a�qlC|(B&̧�wE(�1T_	3�"�������VO������ʆ`P�\^N�H��0��8B��X*mT>��G 6�W�u-�|�?�K�s���I�=&��F��'J�Ŏ�d��\:�c����Q�9���M�'�g�X�l����y})������:q-�x(��-�F��(�R{���X��D�$B�.q���Q�+;,O�m�А�|=�,~;��$��y##,��3[� l��k7sڍ@ۆ H��H�X7�(Ѫ�Y�6
���uu�+�,��M�l�o�� �z�
���a���<�؆P�e>��9���jKD�^���9�ٺ��6@�S-c�]�l���J�k�hSЙl����VW��	:�[f9�����r��2�@Y��	�f�����h撚dMԠ ^T�s�pz`�hF.	)ܠ�i��u��jZZ�QXP�EeU��(3������CQ��H�%�-:r��3�m��;��Rp;ٶ!x$�k�	�	�X���0g��Db�*��J��lۆH�J޲,�e'H�h-Ͳ�n��ϱB�pG��~�y�B-BA"��B�A��,�pA��E�1�7 ���8P��^�,(D�Qð��cB��Њ*����(��2�k#��?�6:L{�<��[�E�!���'���b�	\���&��b�cR��A�H��C�Z���8�����2�m�)�h e��3AGB����*�]T�ě{$�Uq���#ȉ����WP~^�ØG��ݻ��~����.7�b�w���4M���ݥ�7��[�,�������W��]�ak=x}��tn����/�}.>ؿGW�b:������*�������3@��Z|SM8�~ME"��c�s�WX皌���x�=u"��2 Н�����u���f����2���ڀ�}��ؖ8��~�]à�`}��� &  |�8��mX��K��GE��mZ�������ޡ�g�I���-��*��3���Lϵ��V�N��k����7H�􊸇��辤2hC�X��+��/�9�Iʟu�I��1�j$��;�Ф69'�p�m��7ɡ��5��I���a�����[-a�\�2�B	+����?�*@��N�x��͆cB�e��:�,���3��)5�ݪ́����G����l�ȕg:@�J �y��_j�D%]��;�J;�墐/����:׀���� �?Fϟ?�_���s      �      x���Ko#I�.���
�٘B&�RH�!%
EE�J��Y]�
.�Ey$��t�+����]�w�{��e.r0��U.[���K�<͎��"kn_�ە!#��c���;���]�.G��}\�W��WEZ���t�z�U��^���f�WY�,�d
.�:�eɴ\6E>M����E��*K�Y��U�'|+��ˊ��H�����,�m�s��Ÿ\�8�Lg��,�o�i
7X,�*�ɬ\�U?)��^We�}��2Y�Y�%��J����:*�|�����ɼjV�x#zJ�l���M|��H�H��%]�~R7u����E�Lk�.�zZ��X��M��N�����<TIps��n�h�yY�'p�������"�/+��i�����\ý�"�I�����|n|�*/�{������`kg?��9�_w�����6읾�<]��n������r�ʷ�j��w[���ßi��u�6),R����<�,X3�Y��e5�Ӓ>�[�vvv�-���)�,��j��\o�d����,�*��MBQ'U�Hq���j�ש��lZ��ϟJ�Ί��Z�+�����l�� �_�O�OV�UU.e��4]���\�;���t�xyx�@���'�ga��ar���k��$M]§�+�F�p�B�����1X�����I2݌�:��t��i5}̷���v6}��K����Jx��Uo4[��¾ a���YJ�x�x�+Xx�:YӤ>�<�_�}��0�:_8I�묣����v��<�i�.����*�Ӭ�{��.���.AT*~��#^`ۛ~��wBi���W�l�׼�@��A໖~����O�>�8:�u��
��
\_��]}s6����Ae����a]>���R�7Y$�3����0I7�x�p����J&���h�0	��4��l��!L�'x�j� ���v�}����;��n м��v	�~�Mq�AW�A|q',�1���l�Ú���x]�l���u���a��?�pxfP*IS�g��V�:�%�˼^�ҕ�u��ҽ'�x�������-�5�8IQ]�>��ꭞ*�7�Ǜ�u�aBH\9����ܠ���;+�4�U(�*EA��t����/�?L�u�$���$�E��4Oy	{�	�����3�K�v��S�2����sd������ ���u���������a�_�W�¸����+|9�����9��j��?D��j��)����M��~X��\�ep1�=��l\�K�6l�%`�zDd�Z7+��9�͢L��?V0;��*����*�舄�ǥ���)��E�7�7��p�-x��R]���Fj��E��P|!I��Z�f)�ݽ�}�ݻ�c��{ͦ��`	c�HhtT��˟&*��8����e�U��u���"->�r�%��a���7g���N��!�|�gj�*�ʆ-(���]:Xč��j ՘��PäV���C=?�՘V�G�'^�{�A	�k0�h~�6)�矗��d��y�������1�������7#ܵY���-�GäH���e�m^���~�ntF"�����6������a�4�|x��\�N�,ny�5��#��T}�?�
0���i9�	�{�ѹ�\�]Z��CK�m0�
&� )�Y�����^���[�~��H�,��L��>�А����vr�׫��U�rg�zA)�F���A�gv�����G�a��}��=����㍟�C}I�=nL<<�q2�P�� 3�n���ݣ����1�ݝ�e�߭�ȣ�
 I�g��S'!(���iBU/��i��N��;���>���Vhs;�vO��ی&�L|7ş����'�2-��n?5��"�,�����ްs�i�l�q����F@٬b�5�O����<�]�
�5�@_���P��Rpø�0/D�D����2�7���	�v1sJ�}4��Tf�M�fUg�p��
���"��|�p{���D��<�#��"g�=p��O�h��EW\cw�Ç�Λx�y�F@v!�Y���5����=��ۖ�*��ww;�pe�s81�X�,���d��9)��x�������zv�����p 7�5Y7�(����U �D�o� �F��=�9諳/�z���/�=���:[���\j�.E
��%J��6�{Rs���H� ��2�d����o��p�(T0[�P5Z��D���MT�|"�ԢO^��͆�A���ыW�(�KÃ���1\����c��ר�Z�ٚ?��ZV��]�,й]x^-*��j��uA�������`9���Nuc�M������Yv��3���"��p��)�5�k����R<i�������+���x��=JG�{N�K�?N�t�u�weR�^�SL����}-��#��g��S��"|�9��tл��x\�D����tE���[`%�N��D�?c�)e�^��Ѽo�'�2p�(�WMd��Q��Y��a.�
��� �l���#者��NBQ���02N2V�钷1Lؔ�e���9ǘ�'��}�!A�n!��V����0Yp6x�g���Jsz|�����o���oX�o�5�B�p}���)�f����J����Rl��)X��2�UrV�$����S�l�A���A�<=�x�Pld�����# ��ls0�9�1�d5��p�<�>��4,�=i��"����4.H���̇�&�T�����%$[<��P�n�1W�3>Q?��㬯��#�(�1�����;vB;�A��i��&�
<L��l�aK]�jjxU�V�at��J����?A`���P$��X�3��zL����&�>��H��:$��6I<�q�8�~������2�M� A�������1�*�O���-أS6WZ�A�\�Bs	&��s��u�+8�60?f~eh{Y��K��;��fi���t��"��X�J�e��S�^�l���j	gI%KAf=��h_V�j���g�G�D��-�\�Fp~���b����5N͞ �G�B��yV��b]�x�Pԙ,r�����=lmW�OQFS|"~�Bⶲ�h������}�h���ǃa���Q�V#�I��Gk�:fyQ�h��I>f����y1��teh��T_��R)޾�EҸH�#B��'O�˾X�2��h�dk�E�!?=�ml/c�N��vAr�ј������9�;S�uN,HN%�����D:J$�U�I�.J���c��E����J�k2���@�%��hd�I@w�t��<?�V-�Ճ���7X���i���hS�N���&�VϿ�/0Oz?G7��D�[x����0y_�����_|C
�����wE��|\�\�����n��j�����`F%LB)��pb7A�`;�eO�M����l��z5e	�=�f!r1�s�1\C��B�}>�	ËF��@�V�<iK@�v�'�����.(鐉5h�*��[��@w��ջ����ﹼ�YQc|����8���/��}u0��n��$k����>;:%}
G�S�hX$���8��x�����'s~d��iÃ(kY�E���/%WK1#��0��tJ�E�<��l��(�DJc"9>���PL�AxJ�|�j5!Z���Pl��ù�9DqA]1��E۬��	�#& ,Ѿ�����P+㎷���ޙe9:cv�w_>3��5�]���KQ1�y���1����~�16_W��mV�*Ypؾ��'/G�*�&���3M��@����� �L�� q;\��	�v.@��9'�9c����d7��x���j8e(�^��"���~E;7��Eae�?�G,I3X=��2ݐ���D,��!�'���SHyV�%(�P����l'��S^�!�/��c�I���h�Å�LX�,�P�$6ť%1����M�>�����g�P>�7�2�[C��F���>�4b��%�դmAt]t�Qc��>ln�ֹ&��Ys��'/g>{W��H�2��H\IT갲�cO�JJ붏P<������8�;�j
�c�z��i��hF��Q
���2d�SV�f(���9�g    h"�ҿ� �Nv�0���sa�w��&�,�x?��-��Y{�������RM�U�a2��O��PBC�Ĉa%��$��Ȃ��s@�֔�T3��9lZ?4l	B:�"p��_`[� c�H�>g�DM���Ą�;�~�D{����e;�]fT$)�XL��V�J����Ŵ6A��O �Bp��>��t�)H�,B!�����e��5�Ejv���}��%��yp�L����d�|�)S��K�!�!/p�4�*�s�w�;�p�{���7gw:�F�N(�__�a?#�PM�&�y(U)�C���@�К�Q�`�0o>!�TsC�����4G _1��%(Ik��[��%}�ǰ9D͑�$�^�t$Exca� �848 ���&�I��d���nN~q;9!��L�E�R����>�?j��q�2�o���
wꓞH�+p���3#b"U��릘j�
�@���8����߇�=���k�[ɧ*�2N��ܝʭ.�|���`O���0!��g|�6gEM�D�d75�;A�:�F�X�my%��������K�����̈��9F��{����6Q����*n�#��Ҕ� iX� +`Ʀ'�ȈJ��_@A�E-�����#\�0Z�c(Gv��E� ��������@��#R-u�a�q�� <�5��ɨ����U���%L{Y��x'���*�����in(�@�74�B�OPB���Z����K@t�S�>(�]��B�r�����Q��̘�o ���&
�S-x`Lm��h< ��Ě�OVP,y7���?+�	�YO�*㸉â ��J
2l'w� ۗ��4��o<P8������70
\p^P�2�����\��e!�#���?�=�C��N�<���*���\0	>S%$3�b��6��)[� �o2�|��phSx��y8�1�p7���
2�[�к����bI@����9H:�U�c�5�a2qj*�|
�ղ,�(�/WF7&��a�����қ�v�����@���`��EI9�Lb"��V�\�7��r��s�v�H�~>Z�>((����q��������m�ys�,�`�b���%p�I�n�is�*�M�����*������T�`�u���!�Z9���z��m�,�{��;����*4-�ΓC�9��[�����/<`�a���P'�n�耞�5�������j�D�o#0QLǥ((��}�)]��3�_���]k[�1��a�<��ZW���g�_��1�T�Eёɂ�$Y���iv���J�C�B����7�a5"q�?!�X�'P�1�l�	`�i�+l"�Cݕ	�GO��|����_7qf�8b�$����sh2����;'c���Yw� ��ȦG8[���t�>�Q_��7��,��W�M�0��6\_�фFH0,�Ȼ�	�a�
�^oo[�@)�r��c;ũJ�V��&|Z�Ƶ�*^:)��:uX�X�@ )5�:�wO:G$�$Sc`���i�0T��x�a�w���`N�'�����AW������6\����rr;��]0�bRÁ%��A��57��#�*���	2i�R��W��(�rk�fI�6<&]R��z����$Ƕ�W�P�nS�=+!�B'2���&F՚t�%���[�����@�����w;�pyz��=�Y�|u%���L�?�R����ū V6��db38f��x�J��V�~��� VT�s�܎Q_
�'Ɨ_bX�;�{�����{�DӬ4�=� yB�	�·�[���_^�K:!�rZ��-aL2��fK=�AۗtVV�2#4!���`yuK�� �Ơ�f���S���@��@�h�+�?�❠i����؍Ä7ZSr�AS*�����i(h"~;b<}�2���t�^�g�~x��w���9�B�{W��A/�	�S<Y�3��w��_����ߡ�B�t�������r;�W$�Һ�4���r����-����E�A��#ˊ�"��[_������B�Vy��J���S���N���X�}2{�8�(!Z���N����|kOG��R"T�6���-�܏#�Y�IdL��J��,2e��Xr7j�����g=�*�j�R��p�v{�E�4~+��.�q8���|O��.����ԍP���ͩ$�X$)c;;�}���at/��rEIs)(���I���v���v[���P�A����``�uZ#����ff�$��M���s0O��Pkr0���ޣ"���VY�~�F�6�y��7/��3�M�X�Ҿ�K��0k�
�' �!9QD[LZ�q��1W�7�"�>k�`r���a{uV�	��,Ӥ5�לl�����TQ��6-OEQG��0�`�3696\(�bk.MZ��n���s%q�{�n��w��Ө5e6F���e}Q.h��T��^��ɤ�Ҡ�\��Z
ws\�%�ڭc *L��b�=�#���0��~��~E���Ln��^&w_�]��TϦ3�D���� ��60<��x@�}���pvQI�b1;�k��{S~H&�bn�G�!
�Ҽ��'�3:ICUrquw�����߇\���doᬡ�%|�2����������XQQ$g��˻э(�L���Q�E"a��w�\6��h|w�����dt���Þ��O&&�:�p2��H
�5��B�ܤu
�AD�����W'���`!(�3���k6~�;zx��'r�D�{F���6	'��G3����}��z�&0k�U��qTa>��.�J?c�������it��S��f�:׌\��ĵ��Cd�F�'�h�m�e�x�Ƃzxp���9��$�N�LP3<Cæ({��磐��a�n��}��z1�p=���T�K�e�_��@F�.ܸ,�<��^�R'�p6�5����Hr|0KF^1�t�q^��V-å~�x���ݣ�f��r�SJ���c��T��]_���b�2+��Y�4��ß�G���y)�X\~� ��0Yr�d4q.c���	#��e�M!�4K�~a�*
-*r������xa�Mv1$�7��2�A�&��I/L��x$�K��ÿ{7��х�&����׆.�	T��F!�Q�Q!D�7g��a�I���J=FDD�(�c�?}�G��TƓ"�C���E��b�/\��Ī���4���~蚙1\�V�3�c ���|�&����<�]�Zկ�`�¤�´̇���r�;�g�}�����������,�=���Ӈ�po��(�`p�p�L�k���G�۫�o�Wۨ�AJ~�)<FE��K�`���
zǌ���o.F�୳5Z�h?�UFx�b�(����]ك���dW��`ȁE��zt<h-5��R��~ǖb�b�t|"�ky��b'��	�u6��]�ȫ���>�j�&R��	�2���!�<���<���l��˜�J�G�8�	S)Ἵ>a�:�p��{�)F�A��c/5����6�@!b�e3<aU�RC��]�VY=�~�^��~��j�o�b�[�EZ��ߐ�����qm�����8���j����m2�"�4;
�&Z 2�r��cS}A.�8)���<�ʩ�ai�����<W��*6�2TG*���1���j�D&C��L���4!�:>�1��9N�YU嚐[��"�qP/�mV�i;3dEp��`�礥0�'��( ��ג����~���E�R�q��G��tb�@��)ce�6�&�
�޻��۰�nZ�U��ٯ_�)���5k��J_X-�s0�FtC� M+�D s2�-���v�q�)���{+4g�}^($�P�H7/���yL����!E@k�F4�~����T�̫���J���)��o#>��<�dLڴ�T%Sz�%�a�8�͙��:�'�ҏ��Ѝ��o�}���b�S���F�����2��8
�%��>��T�&U"�,9��/¡��~E�*�~�gM��{Z�1~Rƻ���nK;��׽�x��z�{l��o����G{���
���C��d�V�}C�3 �}�7�.��<&���-g3��    ��x E6�R9����Sx����{�l��'�!�'R�5UN�lI�"QY@:i|�X����Ǫ�ǰ
x�w��nk�و���m4б����9~{���f0�����,�v<��h\���|���8������?޾o���O�7�껻�/ߗ���?��+�b����GO��H�^�Pa*�4ު��	��2)j��зU�$���p[�g�܄/@	���<u����ZR@�n X��.sA&84?)�(	�-�A���}Zs0u��v1��	iH#Re��I|��&��DB�y3�Hs��MhI���x�u�J�n���Qǎt%ʨ�˕��Q�6t�,K��=���vyXZW���u�Lv����
��� -
���<Q��H�ɂ\-2��^ġ����Ȕ4����}[#g�p��[.g�4ysr�|�� ����)[�+\K,-yʧq�`���z����Z_�`�f�Ua@���t��*?[l`B��m�v m,4U�B]%2�i����2�������r�ML��V�䥵�,ֻ�����f���v�2h�l�;UJ�UTTB�+�i�\�݀M#��R:+'�d� Ŀ'��L|���Џ&��TJK
f���ۙ��S���v��!|V
�~�X��~wp<8�Í�߻hޓ�s�W���?5���s��/�����"������ғ���U�c� ��d�V��Sv]�<�j�_�AG)L�
�&d�j�a�#�}�Т<&�G	Q� ˈ(��Iq+V1�)�}͙��ۥr+^���xg�9�,�1 ��������߻Q5������-�I�[��m+��_eʑ$ΜԂ3�H|	-��]��L�oُج� �����ta&=y0����`f�������r�>&m�[oI�N�C�!j7����y�q%BB����2�>*�L{��P�VY�H���MS%cS��ǹ���9Bl:=����G�!\R��eCIa�&���~:�����o� @�IaZ�}ƙ�T�D@	����Vƌ(�l@�T������-D^**�I�w��������t�8`���]��ϲ�E{ǻ��c(O��k,���~�����/<���$C�ɩ#�S�g[kD\KW)�cB��&.#糓7'��x*��xԎ�T��X�����a����W�R�+�$Ĳ~�-1V�K�y�ga��x*�Y��Ċ�^i���3�f~K���AUd���hΎ*�T:�����T� f�k��s�A! �]2�&�k8{��c��`�she�QI���/�y�n�ܬYzXN�3�ͫ�ѐ)�m<es%�K���@�$ggx��2�1�k`^7 �H�Q�jb3�Y�2s7	z�����
�1$5� y�s%������a���/E��zR��tw!�o$�OUtkq��Fe�K$r�n\�ʇ��e�~��8��p���;�It��	Ԃ`ƹ�ɧ�L��߲l=�F�ӣ�q�>�y�z
h>�W�Ó�q>�L\�@��A���{��z͎��z98hKt��r�f�ҧ�t���l����6����ȉ����L�#,,3��f_�� b䩀I��4�H��@�W5,�r_�+R����U�B[R�<^�%��!LS��eE�	"��V!�L;L�='zsVZ��
Y]�Y���M��R�p��1�5�J�,�>�B�&�e�+'AE���} �.a�]aiH}`<�n�zL����>�ǵ}��4�bN���3T�·D�u���w4��������佯g�q5��G������δ��rz*�H�$���T��W3U���QJ�}�#�kj��f��T�z�Z�4i�=�}����'���f�D�A2ʭ |�K)�����J��?=�6�J��ﲘ�G��F{�a��P�1���Nn�x��|$��EB����i�b��\kF؃X|���X|y�w�G�i"U��x9����b�E���fS�5q$A��k*��b��Ǘ�xm.i�r�8�x�M�/Q�Ř��L�F��=z*��&�0@��1������%i2�S��(ӈ{��[3����:�X� P��s:/�Vz�8N��1Z���\4�S��3�<�A��]
��ϒH8y@�T4���h �yR������n�����AT��r�Rp��Y����cb�)]T�S|	>�15�H�BX��Ɔ��e�4��r���W�2�m�'N�1<�Qf�GW>��dr:�ì�����nt��1\��ިΫ<�
MqL*����4�p�~�n8{���l��$�/��/O��v��;��:����J�ZC/*L���[5+8�eft�{��M��r \bި�)\��J1�"Q.)~ �yY����R#��Z�qV�j��D����%B���ְY�Vw���!钀�����I��x����P'J���R�1��F�8a����%j���AZA���`'6�H�A��BJ%Q#.��X�]�� �yɑ�YH���O�CAd퍩ң��!��$��qVG?���+6K~���*0c�fG���*�n]��♘��D�]\�������7�)�q��<|�9��ǡ�۷�~r����m���8�	r:�m�K�J�mA�}d-��U�aeU���`���t�^��0rP8�{lP�L>���-����T+�z�������_R+�"7�4��,J�Κ�ә��_j��rw�B�0��DL9!'W����i3OW�$�s��;�����a]ǴQsP��$�͋g�/έMdsM��ò�����Xk	�E�?b�o�x�6���9�yԞ'���s& J�.KF`N����}	�.2�DY�Y�s���F�-7��t�z�%`|���vV�=6�����{>umB�@Rc
'�Gŉc�%�7�+�j�Cյ?������5���t���&,��5Ɣ$'�;z���c�V�D�Н5��k3��niL�3��16��y�uM�-���="�� �������byi0+�m�c�j����#�Q�SG?t���=Ú��������ǻ;�c8�`���x��c	B�������N��ХL��`C���$lr�>��W�>��?U�%�A-:��XP��!�0-،2M	P30d����OmZ��\������u 6�iv0��E<hG?&��/2�EFIП�	s5�g Z�o�v��PRť���?k*V� �}�F�V�_��ҲP��[cc��Os3�c�(����0B��1���I�(��:��0�2؞�(�i���zZ�h����m����F��m&���*�S���O0l%�$�eNg�S�_�p��FoKBa��ˑ;�G,�|�⃞�<��o�b�M�Nn8��5xÜN%�����-�jԢr�xE�wb]�cx4�����z����y�b�)L8ZB=�b2>?'����q:� U���3��W��ʀ�s��V��;�F��3��J��zd��j �=�]5���M��|~L�zb���3��=̱��6n�|��7e	:<�Υ3�����/zgø�&�aK�A��}k�H1j��c����&��I�tlB>��n��7߰P��E�������h��44-���*k�+ TӘ���*�VB�g���ٯvM	�S"/��{3g��b�������������)G����_�G((��`K��
�A��;OQ8�ɉo;��)SР�ο�	su��Jsu���Xl[�̵�,�W�"<jo�ݲ���r�ܵ��س��x�#+[�����#��h�)��AW��$(i�n��L�H�,"��"�b�ނOT�k)���6|'��T�E�l�}5�klVMs�q�ܴ�_�Ӓ7��
-.z��-'ƭ;ߜ��yE� <��z!Ƃ�x�w�9��zH�Bߜݺ��
�>ǐt���qx����nS���`J[s	J�t14�%���
������{�ͩ��͊�P�"N��Sw�����1��׽�lI��?l��^���@�Z�M^�EIL�k���1.?��H�hV�`�oM������X#���Bۍ&f���!<�B<�w    �w_w�Q��A��`݂)� y��)ܞ8W�������-�|W(D6�3Z���d�f.&���6ƥ�̢���7ɿ��'�m�<�c�����A�e�~<��I�#��)����%>�D�=a�q�yk1+%����F�-zG�I|c�j����	̗>�]��Z�Y���:�(|�%�p�
�f�G����N�Z3Wަh�^�
K�H�".<ra��iė�P��ʕ$��!��دd�=]A�6���N�KVY{��I�	bL�� Lh�S��z�/U��@���@���0:��1���ޛ��X�ϐ
��Z~�� �{ڞRki���^2XQx�X5��2���'ǉ�;l1dק̓IPPp�s�&MR6���;�6���6�.�n ?ӯr�R�S	��ճyX��Z@x�0k�2g1��밶���:��܄�,���%Gk�T��;S%��ͣ!F��&����5h+��$U���F�.t�=�~8cF��s��.�LT�;;�;Q��2���r:D��t��4���T���R�ҔNK�k���I�[���ԁSӧ��:s^O�9�؊����S%{2�/�¨S�|��9Frw�p�"�a�<�/O����-��6z׸�����+����Fԍm�8�vr]=���3��tj�ӭ�cb����h�=����K�7�׫4ooƣ�RčQ�ިF��)ōg��^ȸnC�=��-\^w��bb|�6���쨟wT��Prf�r0�Y@YJo�;�Bwn�fct��r@˕���ُ�*�$��I6]�h��atܱU]�(�Ʀ�+�'��U��[���ɠ(-�ᬔkҗz �Svp�8x�:u"|̂aVb8�:hM�A��uc4i���2�5��_0��S5D0��5��_격��o������h6��V`����M|E*�������TqTo��a��f`?��Sz���~�.�O6z���\��ŷf����c4�C�S����k,	�iڷ�ͬ���A���;�혙B@n�3�!1R���7!/�v2�e\a�E�Ci3j��]8�J<I�+v�Q_t?"[��� ��1���V!�ڊ�=H�)�.۷�P[n'�7YJ�:AG�-ѨtY2"hQ#ta�q�`�IL�|V�nBe(�����6�b�l,�84���gHz@4a3�'��eG��L$�IʂH)%=�^��f�WUl&�}�C�L@�ہY�A��C����1��׽N��Y�6t�f,�5�_RS��O�k<�`.�8�}���;�Evv�md��d�V�S̫ ��	��8
�1��Қ#���[��z�*{���lh~���C��;�&Oy�����]4�%�pZJ"�D3�܉���&'��iE���M���)�����m5}ļ���]4�Y0�(��\'6G�z!�\������������qU��t��K�q��}�o��NJ�]��J(�/}��^�JveEj�ś��-����a�	�g�5V!���"��b5��q�P��-7�k��v
�����K���
�O�3!3v���Ϡb��G���[��|#�8�)��wLQ���/g����T
2fr�ք���:�p���?G�ibX��U@qJ$� ��A6�c��5S�\��c���q?��WN�F��w2��� =�Z��K�S�Q�Q��B3����Ɋ����(պ�tY��2/�WOa�x�1����0-K�L��d���+e�l��g;����������K9�X.��	��9��p�3|�u.��k�6�d74"����9�ћ S�E�0~�1�0"�|��{�UϿ���4t��%8"��U�)`�ּ@��)���at�zl�m̓3�G����.㹑�I�8��@|	X�Kz�˓�cG�������P��/v���k�_h�ݢ|'Ǆ����q�o�8�5�@
Wl��u�9f�����V�)�΋�tu�8�n�O~��$ɜ�%��6IHV������:� $�q+�<Ͷ�>;�j�X��HMD�Vs�ࠠ7��Ïx�6I7On�$y����/�ǈ=G:��`u ��n�P}QJ
�@=T���]��V�����I��׋7`�TRek�;=��i�8; ��n��y�AX��`(73����5��&'��i\�-�%r���t���w�8�; ��i��0��t>�4G���N�9(����(3���6���=�%���c�ꆰ��{	�K� aZ@g�iJ�̎�"/Ԍ�b?V+:F1|�sEƱ��u�j7�쬸�h���W���(� �Y�O��gozvy{wv�n|�������7�g�Q���Iru=�%㫋����O&�����˓���������y��sZ:�������,Yf�p�4���� ~+
�Z�0*�������˳?��gW��[x�sx����Mrzv	�|6��g��~w>�I���^!=���ձ r���b��qD#�^iZG�2�E�ϧ�rHg8�1Cifd#M������諆����v�,����{G�c$e{��u�0d�<�'�^�k4o��)HVPW� 29��~��>"=1)f"q�~���Xpp»�\a�Gn`�6M�����LO-u`*���O��$ސ��8J�c4U�Da��P�����u.�z��i��\!�����������5 �D`����m�ma^��y9󠠍i2$����q`y�[3���$�Q-X1�nޓ�(!����֘Jܯ.�� �]-�$k�of������1o� L�Dm�R"�D��v,��{���e:�7�����`i���S]�����ӏ��+��?�%MN�Ԇ������@m�+��,����G�$i���������;<��$������lE�������S��?R)\߶�57��ͬo��2�o�d��1�ǥ�q
oX1�ư��a�U/6��Q�b���8��=Ɲ	��.}~��nm��c��������\1jqϱ%�N��������F�;���9L,��\"�*�%�y)�!��Y��[e�:�ɑf�����k�c�:�qf���uh/ao2�zg㠕U�߂�J���I�E�=�Io��褧v�pC؂?���3Y������P�BY0z�٧B����-�Cv�"��,��'��-y+�AǉCf>�Y�;�3�%�7ҨS�]������Bz�E�[�g�J��~Z#��L㙭�'N�;��ê%�Dx<��HE��4h+��������š�֙�H8��
*�6z�����U>rι�Z����ى�D#�?�M�^$7Wo���Ʒ�f6_n�����nR��+F(�� �AnTy���P�S��yD�z϶S��.�fpw��s�o(���蹧��Q�n�43��=�kw����F��n��H;��dgxMM��O�g�"�oQ�bY*9 ŋ��~�9�3�o�@�<�R�A��U���G1FR���}W�|�Z:%��՘�T.����b��9�=�X
3�Q�|���>�gf?�i�h�v{ �(��Xݾ�ϨP�'�~YNh�ci2�y�`�@��v�:�L�ǘ����=�Ŷ���舳����KJZ(c�mTN��'P���)z��y2���G���%QGf���@��߾���8 נs��gл>�)&�2���	RӇ�P]?��YԴxJ8��cf3������;1�a�$Ǟv�8>�QRj:-�Ŗ�n6r���,���GL5�B@w���,��4�o���1�l��,�ku����nD��h톽Q�m��Y
c[�Tr��G\W~_��� ���]���ky��I-~#����+k���n��G
q��Y�ޕ�� _�:���������o'W��_�S�׎���·�U��'W��	�#���$aV���A.����'}/��
�J�1����|�u�B�&�H3�����5� ����e�fG=Y�)�8 �&���L��wKe�Y??fK�O����nq��C��b�O.��]�����|�n�v-!8�hCubh��b.`�9��Rk�Xtf�v�^o��Nl��w��|�[h��$�(��sO�@�U���7�M�Ưa�F�0��P�fT��H8�Ԍ`�    �X��f�Ѡ�)�V�x;��ٚ`�^]�E�8H,w�ҩP�a�ђ:R.r%-�B�RJj�I(2Xsxrd g��0Ą��ĳb��t����0b���/)�F�$���{�y�1u�s&�j��QAZ1!=M�mB
Eg
�k���;0Q���'6D���\�=�	�s|,��b���HH̾��A���������	�2l�����D�a'O&�̽e*���%�K��o�f�Nh�lᒹ�я�n���s�#��d�#�һ[N�������D=;�_J�)�-���M���%��P��&L8�"ycs�0�y��r�3XŢ栧�l�ݠ����F ��y��ں�x���9Fב������>�}D�\� �qݶ��(��OR�ҊIaj��b�I�\ϼ�ژ�Z@���Ͽ���){.p����!ʺ�����ao|v��d���o%�VQS�mgu��Սc)�+�-��`q�f�ɥ��7�-��dn�`} u)C���G�Y�6>W�y�y�W��㵍�H�f�qHf�B���|��Y/<)m�zɋDp
��Y��Q�T^J4���V.EW�$����[�vi;r	;�h���m����8>�@����[ZN�|U���W7������02l䕨�Ba��B|�It����!H�`Bg��9L1̤k�c0�/�و���ͭy�;|�1����]�� s�E�>�ƙV�戃��#Q��"t:�"�@Q0q��G���,s�8W7w!'�������8��-�i:(F�͔T��O��k�Qb[��;��6��	���Zx�[�g@�#��8[�c8�{;�<�M���}�&�;3�0��Ё�H��|N44/Ck�D�!���Ӿk���|U�_��}v�ƀ�������MfMSǫY��Nd!�^X���8%b1����T���\đ������D�vv^��or�T*w'�ܙVT{;~����"�q�e3���X)��ч_$�@��
�K.�o�����Ԝ���b�%��<�@S:[ޭ�ڬ�cd�����B������=Y����Su�S���&��%q�L�k��3���"�DL�Z,n����y���y�`�2+6����6
��n�~E�0�)]Hyo��tMy9�3��u���M$t����PS�D�{���]ʏ�!��3�H�g1ϹM�:�3x��aJW�����G`���k�IOqʓ=��aΔ�0�h!=��3�Z�5�z�#p;`D��d`H��ӕ�h�꤇�,��g�j��\ń�Vf2	sW��z����*�G�~hggx��^4����Xv���c0�-�$��Psj�����A� ��{�L�e` Ѳ��h�K�H��'y�D�Bdލ�k� ����.x{���7*�:! ������{Q�=7F��{ÜF�������.=����i��vl3�J�+�U���k�KbG[i�-�Ci�MIg_����i��3m��6���H5����%�?hԂ��oo����u������ˊiξ�mW-��ʿ���R
�}Ge�aZ@$�9F(>]�NKV���ԪuN�6��
p��%��;v �9��P^�0�cՎ#}�R���uS����Ui�Q���֋#�<F�uл|wՎ�6X-3$c���%I�9D����p!���Z�1 8AP�!K����H�^*���X��׿1[ȝ��h�zc�]��-��'~��D[�^4�>�R���,&S��v^;s��+� "����I-
E�f
Ϭs)��U�뽷�u�r��p��v�\[^Q�r�U1|��u�e��d�McW��u�H����ai� �N�l���]GQ_���yE���$4*1 >0bm�Y�M�k�iyr�H���is_Q�&�Kd�^�#��79U,L1)�|D��n�i�~"Uy��-΁+��x�a�o��� cd�hMv{�x׊��Ҫ�ԯ�����%_����N����a�Ǥ#�}������#?bu>?�T��xk&�=���x�)�T��M]|��Ph�&�(@��1�ܽ�8}@�6�t�G��5x}�78x}g����Ϋ5���q��-S�"�{5݂�۔�S�^r����5wFT��D�A&s�zj3�u_p]��������/�fA9�U��S]�z*G��^�����@s�'|�)�mI��CQ������� w7�7��*����!ӐI��J��B��i�]|�+�[�������,�����N[�x�f� O�Y�ڸ��,y�������0�zޝ��� �q*Ø+3��g�|2�JM���\�N���]I�N-
���\T�@
���^#9��p�%��$��^�6*՜	W��TK@�?Ex:.���{H��q�����qc�~��e��f��򰇆Dՠ����{�ɖ<�G�i�������a0j2~7�yw9�qA�p?�]����\�����V�f+��C?�7�@]l�Rˑ][1X��BX�8��ƈ<߾ϑҢ��B�j�v�~P+i�hz_�w�z�� �α�VvAg�|��կ����X��o���Gz�o�97�+���"�J̔c�kG�ыu#�&��*�!bn�,��P��R��fI<Oآ'ֻ<��t���Ug\���^ �a9�/sM1�Q��.^��2�
ڦ���:�om��IY�z�х�mA�l�S<e�;���)�O����6ǜ�|�T?Z�K*��[�����s�&l��UY?��Ȟ����H����_��U:G��3������
l��>ݷ��Y�]Z9�a$�fF�ii�=����!E7i��#�15j5�r��Q&J���K��O�}����=`ٖd?<e`�K�@��}G� �y�6�6_.0�+�H@��
�}H�+utIn��ɽ"E6�x�;�ӌѲzg���t����O�OZ� ��R��A:��#q��J.�tڜٙ� ��[�W����Q1!�\9rh5Y�M�8����2S�A���>2���)kӚ���3��L_@*�H.�@&����5��ض�1��a�M�u��k��<D����D�a�Ta�����'d�Cכ��0���sD�취�_(vs�P��=�?t`0�H�^Z"�`��2� �*��t��<�y�1��K�~;|!P;��2���,)@�9b�?�W��X�O��#�|�{̮r;МR�A�y%�����Q1C��SX���I����~
�dB8V饮��*|�Z*d��1����W�XirM�d��xiXU-q���)dH��E���'��tL,�`a6?"�G�����#4��9��T��N�N�b�p˟�"щ��ny�}~q6���$��������mÞ�澕*�w�D��62�Ņ������������\�?�����۠<�R���jo��~@�k�h�_�N�}sv2���b>4����ʃ��p�t,��/{A7@@���Dx)�.'���΂�N��I��g�������Z���0��u�f�(�� ��i@o��2�"�O戩�*��P�!ᠩp�~�R��z�IgvK� �G�v��n�r�S0�gJ�M�&Q��ƀ�/�	�I�E�ߝ��/c7�;h�f�Yc��o�=#�+IĬ�اN�x}�N�qB�vd��>o�Z��ߞ���X�{�
)��w�����y6�,��|Rܵ�䨍��z@t-F�� I=G ~�$�]�;~dݸ	���V�@�U�d�S�p��>���Gk�u�,�)�b���U�I�Jh�FX��o�һN�����r��(����e�&��Q�H�(!���� �>�=l��0(�0c$6��D�F��ax,���9�+���T	y�$������W���O��C�T���k"���iq��`��%���D���(�N�U��w\	��V%l������Y���)�6���m�~��R��o2˓:�ĕ.�E�B���k�_��}!�D¹V��k�������r/a?���j�(bl��I�Y9�)�h�� Z2�s��|���+R~��S��@�aՌ���6�ɥجpq=g/���<�Vs/�wn�h5�����&�n��ZϲZ=fW�2�Qq�C��ot+�M�5h"��    �B�H��N�-"ɓ�i�R K�r{`��t�LL�j��m���B�gg'�S�SH���3=���&u��t%I�h>��,_�x2i>�*]gJ�+��Sr��n�?��~@�g�h��zo���M�i��q>ä�Ok�(���2o��� 7_Y����t�I���x����ܩ�Y�7�P@~����v�Bd[�8L;;��F�!-�Kj#���!�9��ȇ�������@�l�mнH	� �K�)e6�H�o�k��s���9Fk�߻]o�p#�[P7R�/VɫuW.��¾EmY]�@1Q)Ld`�b�AWs���)���q9ݨ�~)-��c9O٦K�<�!i�� N����Ao�֛���+�!:���W�ҽK*��Ѩ5�,��m����=i2%V)��K�RA	Er|y��St�G��b�C��_�F�ہ�;���m_f����~����Wh�y�_���2Y|��=(Õ�r;�e��4. Mec����Jur��������ԇ&�G���%��Gd[}�(����H`O;d�̴�-57����8ٻ[;�-�.1$�' ��,�`/��\��8���?��g��ً�� �%'I\Y�'F{�|K�3-}�� ���<�4�ik�{p;��~[�b�>��%���j�ή]��"Ej�m�N�R�e��E�β{&��$ؓ�H�2>��O}ɔ.L�v߾�jl�v>Ekzq�N����ڧm_�c0v�58H@���s���6������۳;�Z$�0�o�M9���n��÷3��7��%E�)ҙh�Kvg#Hz(M�x����Uɂ��3ca%�)�K!����!��$W�U#�
��v"�4B㻼���� Er��D=�܀!�@V�|S�8�V����`�3Ƿ�{���c��(��>w&����1%�<`	j5K�r��a�NΪ�������1��A�O��!p���I�<i���Y�Z��$9�R�͚�/DNc"��]��j�-ǍCQ�U�K`�"2��n)z2��j�������w0J�7]Jd�z2�afO��0=,ٝs��D����Gk�ɝ��1Z�A�"Ő�HU\�H�U;����x�_NX�M�$�.���c^`
8G��Ѯ}_kuQ��������o�"�a"ϑB[>�7:��%���)���~���i�U�����D�q)�2m�c���	,�</�,S��w(}k�Iuf��$�87�@7`�6�/P4S��w<<�����i3��k
���6�1f�v��>�9Ơ��(E��}�qB��`�/z�MՌ��m�*_4�\D׷F1N#*؊�0Iv�#c5/qI>rP�у)[�VD����K�j��(@#�|mWE���m0�@b��_� ���i셟�/2�Ȼ��{��*��h���q���������AK���ɑ
e�qgr��,���AW�� ��SK{Z��4������s��'�CW�n%P%��b�6_:G�kJ�Q3`T1,���a���#l�����M�aorq}3��U���ԩ"�C������-)m�^�z_E!X���k{��uۄϚ���&
�vM��JM[��#������8��B��2�;Z��~��慵�;�ұ����N�rr�l%cE��c���"/^�y���i�:�mFtmq;�v��Qd6~r�ֆnj����qZS�b�m��Hh�����B{Ĕݸ�����caPmp��͹Y%xK�����ks�T)t����q��2�\���Aܯ�Z�t�eybg�=�n��&9r���[�����p�l�:oޙ��N��r���]��p�$��]��tY��3���3��\�a���%Q�����C�۾��g��.$�'|�e���楇����=D�8p,�G�������6��{��crvq=�����3�MYHw�;n���y�;Ah1F��{���K��iܰ��=�W�K16��f�1}_���yä;]YS���c]I6s�tބډ���X�sV��Lp�2��,B-�أ�T*�%�*�^T�0��Ѻ;><� �#�,4q<�Z""��c�M3?	���ҹ���0=�)���������H�����j�����W.�y�\ ���d�)H:����Y�v$xx�{��ʶ�i��\�MpNEǔ�	{�{ǻ��c����}�(`��~�8 Dm��\a98G���������0�j~JT���}g�}���q�;��q-�D"���/2�x�Dd�qwB#[�.�22렃	y"�2[
��#g�s=Iմ��ꝁ`�[c� {ax�SW�r^�O{�S?�Ӈ���l��/�췃���*h!L�K�I*$_�/I����Ј�;�"�3��,�$�S.:v��/�f�6���.�A�����)�Prb�Z�P�s��3���e��ghpd. ZT�c��Y5[�/U3�1Z� ��U�?d�K��G��b�^�.>�\���qЪJq�i�S�Vl����O��2��b�M9R��%a�(��Ć>U�W����av�X�m��ͤ.�K�����!�:H<��e�������n)��Hn�C�����f�!,��Tqc�$�-��um.%|o�65�-�T�Ėc���9���d��������KF�n-�.�_�.B6���I<H׌镲������!��]7Z��>+�q��a����@�ǥqv!�!d�~�9�t��@��Iڥ���Y���c]9�;���l,�����g$��V����t��uw���AڠT�e�y!�Y���5���{$���O�ߗ9�U�"�{HU����G�c��ĝ�j^{x�)�s������'A��KM�M�Yo�(�-��Ky����QnK`��4���v��+��Bx�;\t�Y�d�����S�0J3~2��Z��)�G�o�8�w�\�]����G�����U���x��m�H[��E$����b�#;T��UN�d9��VHt�e�y}j?�]9��-"����s����<d������f2�u'$�e����ޭ�2<v-]2�qu�����t�����M���v���i�ד&�:��Z��T](�0
͛�L�C�����_O�4<Y7���W�D���kN�%m{i2�Q5�c��'b�t�	�dN���@�x�Z���.��I��^���Mf� �C��W�DEVB	oP�jmtD`�c��\�J���x���~�7���X��z�[���R�-�Ǻ�*'a�%O����O����_�<��B{��[p]
)fl���j�5�?��DP3n2�6�ȣn�D���08)����^AT��,�pN�*1��x��K]�(;*Zz@�BQ�9�Țy��@?g��!�ƅ�	�<��}���-�ײ�F*�yH̑�c$5�{W�H���(�p�����xt��-�V�آQ"�
��e~���Ӽ�%z\h1AT��s�����`:`�ܸ���T9S��N�4|]1vB.�lz��1N'&�Ɵ����b1����e��8)�i�问��x.��!`�5��_,�W���B<*�Y�!�i��&�1�8�)is$�����Q�U�c٣t�WW}����������W�����W��	o!�l�D�Bg��c��-	r�&}RS�g�z6ҷ8�*v��y�0=Q�76��}�X8eoQM�|�זjh���P��̘�<�>��õ�����\m!An^��������#�-W.�k��i�����{8�Ш�W�QI���/0C`'ѐdZ>�R�s�ڪh��>����7!��L�E�E�3�x��z������0��b�J���ȏ]����c��D� f.%-������f!�k�V)�a� 5%��z)�F�' �5uDsU��96ҢC�:,����e�5���4*A��,f�͟a�Җ l�`"��56��}��G��u�����~wv�lh��I1���ߛ_�����٨������j-Os�4��J@h����ͽ^f��,X�s�*6E�/C�Q��#�W`��&@4�``�nϧy�1��������n�v��d0��g��5�1yI�2$�E
���{�})�qS��]V�&UX��p�i��&�/�Y��Hs�/    ����挳��2 ��Sg���փ�Sj����,{�9F�/@ n�J�Pл��s�������$E�-����~��w�;���>؃k��F[]XdS����s��#�Ⱥ��$��y��1�x�t� ���ȇu�Ŷ����[����V�_�ΓF-�*S}�, �f��I��p(�������`ME���F���HMGZУ��b{F�<@�1��a4JoW�����1�`���~?	�������~
��۳�G7�����������j���kN��'��<�NN������o>~��w�����?l�;��O���J�K�5����Uċ��N%�������\C��	"H�0��Lݪ�M=-QO�����p~]���]�"�vt�ђ�.�޽��'�=�Β�=tS_��}�a���W��Ś�1be��10��H��2K�X]�=�Ք-M��&X��H�$6�nO�� ��1���N�ِ$텨E�}�|��������>��'��3FW1s�鵋�(�� .�?������SNݣ��p(��a�O��C���ȴ�J���4fJ�x2�C�c$g��w�mƬs-���Ddg*�޻�|n���ְͪ5B�ֈ){���ׯ�N|�;B�j$�aM���麅_�]���fSk�
�:�)���ҊG���}b틠�?H�v��AEH����4�/��r�&i��-�sv�!���.�	�l�ۻx3�=��O�a+�@_u����3S��h�ϖT5]w���yQ��[��5
�����R��T��&$H�z^rt�W�\.ɍ"h�ͻQ�aa��zh8��A��Ĵ��R;q'_�<�KB6�]�����g�����&E�$o�>��XDp�BJѷD7Z<�J���ªB~�"r��V@+|�{ݘ;}�?orTSU�m��e3k��ݻ/����7�['K��c��ӌ�\?%?��t@�5�ԛ�L����vr��R9!�$^C�Y\�� A8��5v���_�0	��gU^��!���������pEs����( ����� 	����>q��"�UX{$�P
vk�T�I${\S��Ѓ5�ޤ���gn� Ǫ��C?���w@B�
�QfŊwu,}ÁЎ��H���9j�F�
��&�W�w6��f�c�0����I�:/5��u����9�탥�q�$��	��^ l8�(�2���2�J<�{R����t �;[q��> ;����xr7�C���Ї�4�G��\	-.{/�����T��'�=H�g��b1�vA��e��{���Jw=	h�C�k��wJX���1֥Dji�A�Ԩчrf���:�|�kZ�{��tFP`-�	u=J%��=�]x�H\Vg�
������Y��brd��Y]3q\.��"O�hu��~
�Oz�V�xq-��3����<����iu�����G��!&}*����;�[QB}Y���GI}*m��,Q�9vO*%�bʓM5�ԋ�(9�R�H~�,T�*n �N�d��ݴ�)�,����bq6!FI�x�~��ܣ�c�#[d����-�N�)��)�t��m���:�$�'��ʫ/B�KsG8�Zc(�{�-n�:E(��V����kt��C�R`��$��g������A�"L�֋`�6�����A;0-�X�η���W�oc:l#QQl�������'��:�|~���N3}����1��id�l�.��A�G���o�~���!�K�S�ժ��q�D�7�rYf9��w��V{�A��	��h�l�I*#iGT�z(;[c� [�య���6S3�ѮF`Z�]E�l�RJ?P�L�iyS�M�Z5񑄤.�GGG���ϭ��}�"H�lv�n��y������QeK�N7�BC���X��P���s�1�~ݵ����Z�-���@4��£�l���K�/J�F}��ۆ�Y->��:�&�Dٔ4Ѿ�jW�#�q0nt�c�vfQ������2�@CR�*p����Q�:����p3�ajȬ,B��d�t^�V�ᴅ!!f�PNr�9��$��%Fh������]#g���
�v<a�Ci!��	��ƣ�I���m�WD^W�v���x�k�/�:`Y%W�QH
R�6��(�P=�BFa�ҧ�(Fa���_�1�t*����x�������~���`���) N�v�ݘJ��Ng�n4"BL޳���Z�sz���t�Ph#�0\��ː��9�s9�o�~1���$��7��#�&����L��$�{�������=6��L{�C�@E����="�z�o8F"�`��$�1�矢n�É7��3~K�0>q�n��N��K��1����$4%B��;K� ���-u�$N�~�kAɒ���4*ஊ������s�����}�Z��CFѨ��=A7`f�	��;�_ �!�5>����ӠM+�D�YJ�^mM�O���<��̦��1�����?�ݼ�����U�u��@�*�M�掩m?�N�Obk9h�,5(�:]�e#g�hI� 鴦g�ܯ���SuEIӄd�NW��6F�:z(giݹw��1-�j.��+�
a�s�Vn�;�F�	sf�N����i%�1�}H��y|�q�Mۗ~Y��e�[+;����r�߾�;�����YC:��`�#A�=�9M3F��.ߛD-�#��7>������|F�@[pOjk����Q`�g�,]�?�;���\��2�rN�1��W(�<����+�+��oQ�0�����$���K�l�Δ��R��;�{�٬���
P��df�5R+��|�9F´����}���)��@_��T�#��0!�h�.��gס"Ek�u�3����7��_3^�O�q�� {q.�p�W�T��
����p%P��ϡ!1Wg��M�k��8��-|E��Hb)��rm�ū��#˭1Z��fDU۩��F�}q����d�� �����¶�ڊ���k��3��Nƾ��������{�]e��\�o�"���ͣL%�c������ 6��r5���I�kjEW��o�P��t�W6�Gp��Ty�+C@f�uXgV�j��J�����%\U{pՎ�â�uv[Rx -�Zc$����ԭ����46����Y&5�u���aH�Ҵ(��K}Q�5�.��km�a�~B��T��%J*9�:*�ȳ�X)�#D���{�8�1Uq�Ķ7ƙ}�  �I�,)L�8gm�z�h�+��K��c��w�̤?x��
�(a��/��@�[�c�P�D�lt�|�gկ�s��<+�x�/�����#f�M �[�G�ۼx}�*��������m?��=#y��n��c�:Gtm<�t�d�w:�Ν�K��̦��4RS�@lˇ�T��S��J�2
���8��71�l�יw����s]�,J�k��>!->M�ܹ`�*s��$al�)P��p��Mj�s}��f�tƙ��<}Y�]�H�c��:�ͫ��l��B�n������t��0��J���-��h��1�b^�\���w����[t��j�ʥ4�&.(�5����C�Iz_p�Ѕ=�0���([�	�(zo��Y�)ɺ��τ7�1�PE�芎"~��AC(�ʫ����-���R1���0�Oz��S(+8O�+ܕ�i�*�=��Iz=:9��:9�i'(� #X8�).�����Г9��:�t����Y��xF7������5�𸚌�d���H;�+`MĬp��GP�56h.�����鳦r�3 O�R�W�o91Y���#�_DjĈ�1���#��[͙2qq��%�4�7T���"N�%���S⿆w����kܨ���Se�y�~\|�Q��9��}�82~��g���[���홨��Ԓj�M�t|D�R�-u���T�����;��;�h� �9��4V/��Uo|~��j���z�9~��n���б2ڼH:����v��yI^Fڷ�,+�����&�=���A�L6��^�Dz�Yy�x���V�+	�`�s�V�w}suwu��1�*�1��V6��ڻ�7������23@��K������c��x.     �fU�K"Y)�Z9��삙�����;/��<��$翝����e��U]$�r.���U�����C����Ỻd�:��Q���eB�C��2��t���J6�
�&����Q�~���z�����6�������m�� ��+b��J�	�C.7O�u;�>��l��z����9�VYȯ�]�Z4�_���S��O��v���U�g��EA��/xd��->PGJ )s��V=�YM�y��;u�x�������y�~��tk$Z�>}�v�J��b%R��K4�0P�Zx=��y�:�T��S���T"T��9 �M�c0l|��N�&>m<rѼ~K�����+;�t��)�_)Օ�L�V�%@�PҶ��K�`d���0�[{��Tl̮�o0L����y�6ӯܽm������
�ĺg�d6�'�H",�R���H66-ט����@q�u�Vs7P6\m.T��6�thLMr�^��B��q5��4�J��Ք�y��K�|�����葁h��>�Q�7���V�V���U�����W�i�L�QJ����j�=��p܂��jEA#���de]��*_Q 
-�*�d	�!������{� 3��@5Z7"7�;`"�2E��V[�D����bM-S*����pN�q�k>��.Ֆ����ȍ0q��rų?����*�셏�f{�x��r�p�m&GgKR����O�U,��@#%Y�rc��}@������Î��xl,�Xﷷ4.��0�Ͽ��?���.MT�5W�� �FHi ��#U���C :U؇��h %K�)L�qp��˽�{T�p�.�K�X'����Q;~^1[\��0+L �"�et2�׀��{100^܍�� �
�H^DSH�H�(�*��+ gKa���C���X;r1���A�1k�{V�Uf�%,�n�/�Y�������5��ӟL~�>��p��޾���!؆v�� >��"��|�
����6}��Ą4p��WpQ!=P/�!e�vu�-1�P���
�'3���'g=eePQ0�:�"�)5"~�WJO�#kIIk*r�ؾE���O2j�P+&�HJf���2���Wk_�D
/���h���>{�Z��r��s���k�]��;�������M����`��;7X��Gص����M���ܘ�jg��ϖ����^S�$,wD���wb"[�w���� ɢ�Gj��G�l5����y#L���=T9�ӥW��N^$�Ϛdk���Sf��Dّ�LA0�C?^��J�P�}Z�
o�1 X��Y�ƪK�nQ7�m�C�`h�������]����;��q����	�-�B5��Db�ط\A�P��|;��Y�H�ܦpr)!4�Q���W��N2�8�ܪU-��1-���uVG� m�<!�Oft�z��Ȭ��ÃC�ȇ$�G��ȏ]t�M���Zb,�Eҟ����d�:�Z�f2q�����c�ޭ��L#�$uH,�Q-o��V&; ���\l�j���������@���mE��
���Jp�CZ��v�M�v$w�]&@��i�"��/t���[�ˌ���_P�Нbaa��	b&���a��	h��4eN١�mh����wP����G��~�1�G��.���%Q���C$ߖ��(W�a�ΩZ�n��[sx����1E!�P�
��� ϖH�q�S��b��,�-�i��PS3���B7M��aa�@m�; �߳�it���%H\�|�i���<��17��=N���Ǌ�k��l��'�ܺ7��0�xT������w�ϵa����i�2�7H��P��:��wT��@�<�<�iB��%�C2�m[BG�4y�Q�y�LL7��f�=l����X_D�w2<
^���$��Q����\L.���eo��\f�����j�y1~(v�&�[����k��%�YR
/��&2]�gv_B׮I�>%Z�������A[�l�J�L>AJ]e%z˄J[+��AS�K�rv�CF8��{&��DDz�%��ͅ�������yG]^�_��d�
z�vE�E�Rh`�^�4s��� V�sS�%��e��O��W����k����G���I��O%��u�~Js$��S>����3�Ӄ�%���\��{��`����`�Y5r�.���k�vm�l
�.h)J5$�����D҈8�X؃�~��e@�Ԯ#X0�\y{ǰ��</�
Ң���e�R1�����,��6�r#`��Bj�T�JO����7I��y�rw��v�`=ẔE��m��#��e�� ��_��� �>�2�R�0�߆0��W��"��|&���y�x��C��k;�ot���d|Ř=E���B�9:���V���m��EprA~��R\������t��
:^`�z����d����)�j[�P�:P�O�V�j�0&p��nL��R,~��ʂ�� {�K�ϻ`�LF�Œ<�?4��{���>,Ȅ��1GX��&)E{�|�z!� ���ǚm�p"JR8���n�~���Ϣ!��Ѱ������1����
32ʕ3�U�V�"����s��6��y����{�.49;"��d����I�2�zY���R���ߎB��i��t��<���[T1h�}�+�1nԅJ�-o
������$���cC�^"K&���k{{y�x� �椱�(��S�a.>�gf� �K]����TƜW4�&㪭��{�	��ՠ��q�E�Q�1��Θvd��JLO�"�������YǒKg|XR�e�0g/�m���~$(�$���_��-�Ri@�X�)�vf���!~�p�P)H[}h���|�`PS�a_/
��(I|6��A^�V��'�b�S�vS���x���T���p����ǋ��M��v��~���Gr��3Y��%~�_x593��#XeGJ���������hc=-�v����1
1�[�ERU���<p�gIe,�J����8��*k/ ��IMb#����dd��~E�D�L���ߎ�����~B�΂e������(�:���9���!VN4�)ذ��9IM��7'+�X�(�h�B܈��g6���KX�t�R+1���B���7��e�n��c�M�X��n:�c8V;���=�q.*�/��F�|~�dZ�߄G�˻��!CO������&����O�'�ֆ�]�?���st�+7Rf88^�}�!��� ���(��9s����}9G�2�h�X����T�4���q/�g\�ŧ��X~
�@%����/���/�w�#�yp�#�Z���<Aq����l��	tA7�MM��݃'���*�V��A�B����-�Hi;��#}����-��������r�`�|~5��-�_���?�ݿ�_�\�VP۵�%7��4�y���{�5�w�ÔS��������g|�x??|�7�����?j=�/��;�bm�ܼ:?K��� Ӳ������qrnI�[gu�|*����q�ϤŤ�ȱ�(~�ս�k�� )Y����$����
�^<n-��������F_M�Ćy	%�6T3��|
���Q�ݩ!��������?o˚3��w�K��(NA�4��U�	�L�.�\.�(CI��?�V��c�
Vn�T��z�v��nWZ�����?P� i3mL�!�R�V�(��bv��翈��S�� �#��[���t��1	��n�EbY�sl�\��:��T)��Ӳj�Wc���ӨEv��ȑ�ge\�|>���5�QQ�J��F$B�"�����!����/#F�����o=��q�y�p$EJm4 O/��\�a�to��W^@O���	��?(C�!6�����V��{�ާP�F�3�����Z�!�����庐�t;�H���`] ���2�@���@��!}"a%��2G jt����1l���<Ĺ伝<�Mˍ����S�u��5+̷|�U�� ��s8�%��C��J$����B��E\
��Jb"��L�!H݈2�Hs���g3�Q�z��-��SW0�Cy���1L�<�q���9�    ���A٫
i�b@u����%�b��A8@���Q	��	Q��h٣�n� gz/D����}]�w{-tgq�_õ�<�/m�,8	�������/;��+�2m05W�2�]ił >�A�!Ҧ6�U��J��5T�d�N���v-�C���p��s0��T"9s#�%u�M@�ݩ�'�i��B�}[��u_�j.���n$�YC��������7���pDܳ�/֤݅
Ԭ= (>*{��ڔ��g���\$7�_N��Zn�d"�f;�tn 
�TT=�`?��U�qS�Xζ��8>qZ��d��ɪ�k�f���
���8��ϲ��Q��>�C���������V�H�K?���֋�3�D }�(7Q�oZw�-�S&�l8�6��h�z��XsU�GT��>�&��=��on�ˆ�"� �-:�A-<ꚅN
J�B����H�$�4�ET7OI��d������γ�����u��;n�i3ωQ�����n�t�xF��|y����X�$�"s���aC��Jǘ���K�����܋�&4�
_�5V����% 3�WS�8�E�4�a���j� $�6E^��Ui���NS���}� Dʺ���kg<�� 6��G�N!k�M��-}�
`��fj����"��꩎C����p0>�@��!Ef l��;A�'���'�g����Kʈ�O�"�AE��(�Қ mS;��F.-�$��Mx�M�X5���=�/�ۆU�>�C�K�"���^�4%>���g���z�U�EUGc�fH��lV �#�!e�Bjڅi�B�n�u~!4U=N��Q�K@���9�	�I�6z!�L(���v��������B�&��<��A!��'��y�n!y�rA8�*r�Y{�{��YV��<L*܃�rfn������-�P�O9)�i6�@��tiqAB��������y��욑��%r�ܨ4a?��� &`.��qY��pYh��d�9;(�˘>Gh~w���9������5���ȈJ��JE�Н�P�V��ǃ�Tx��f��v���Hc�1aǝ��/_=��8�������v)��݂<�޻�=�wqD��M�Fƫ6��u�jyD(�/oV�s/ܗ�=�/4@я��<W"���j���bEcH� O����.�@��i-_IF,n�V��@�:��QN������$j�n�z��Dx1�ņ躍�K��Y���0��1t�F������F﨡��n��J�e6�x+
>V,JPvѩ�;Ċ�7�/'(��s����Z![�',���8f��sw�uYb%s�Wz�x��A��aj3P��}�i&)P�t�ʛB�%��رpg
[�A8jW�H9�ǈ�t���0�-?p�B1�7���q${�D� h_�Mel�k�8�|F��=C�PY;o�B������w�У���R�
����P�n����Kt�a��(����IHza��>��<1
��B�@�����;�=@���?j=���Oa�?������2.�1�g�$�e�*~e�8NS��{>��������?�R�JP�רL؎�MF�-��.X���i����`jm�¨�0Ƈ�8�B��sϥ|����/
~J �3>�X{��;܀b'd)�F[�l;��a	�c<A�u�6�E�O�68�3[��̉`s�Z����H�@Ԝ�6��	c����dib+kH�j���BZE�@���5t6�-Zz�"�\��x��J��N�[_H,��/��H��>��>H'����Q�q8bw�a�����%&�㨚%����	�#�ۑb$�V�dRy5R�9�v�]ԕRm���B���|U'Z0�"��_��3ۄ����re�y������x,�ψ!�c��B���D�jfCb� �l�ch����Gĩ9�� %41䂝jvv.��&�̮��e�L24D����sӤ����z����f�ޏ�ޘa�������.��8��62l�&��ʰ�y�fU�W�J`FҔ�%�=�#����8��	�x�{[��7�ץ�(��gi�ag���Ի[:6yw��f<����*�ϨBGs�ss1>;٦q����B�ы�	�&�'0ҸR�-jj��z��S��P�L���m�Z�X�e 9�s!9Nև*�ΘV��<�����P�O� :�/�ox~�ws��_�a=�!,��j��
��
��Q �>���_d.N��iXp�p�� ����y�G'��I�z_��g�]/9�c�r@��g~��$�f���Xf�I��z*#[&��c����D��Г:��1V��
��ih%R%[�w�+潸��#[m ��X����re=)!&S3\��~���nGX�]������`X����1��ⲯ�J�{`����I�@D�u�z����}M��Ҫm0��@�?1���Bo��	�O.]xrpнu�æD.hхʹκ�@T�|�?��S0�{��@�v�P��eW���n1�R�������C�#�r�0E��︊�߲;X�l��Y�g,��-i%j�_L�Ev�<|G��z(�Z~��?��4�7��7ñSm�.v��|V�T���Ȉ�zV��/��=q[ZN���L��P�����c8Ԏ:W���yA7�Iߝ���������FD��u��xr���(�.bO-��mo�U�K�WE^������Z_R��00��`��@*|�E���5p�o��Q��dd��PpC�6|9�A}ҷ\��U���`�_*/|ϓ��-��5���zK��n�c���i�);؆8�4�7Yg�d����ñq�yZV��ە��1)F�*��b��������p�7�?i�J���f]I�0�ŀ�UQ�.�E	 4��e�s��*�PL+f�ƛ;��������A'hQy�Ѐ��Rg{�����0��{���f�v+5��K6D+��Z���$@�6
fNFr�W�iV4oo߅2U�zDtm��L�֐v{qf¥kk�rqsي�̦��Z+�}�`/}�`nm���x�ʘ��>Ѻ�Wz1��E&v@��S������2��j.M���j�3�O]/�����R�hV�g]D$F�ܒ�Q���F�7m.����}Y�F�2�����p4��x�z;��F���l��mb��3�Y.���10$E�%f`��RZ q�Y��{ ���R��"V������"A�S� z��]�5��؜[{�S),��r}�U���;!�U5��_�!UW�c���}8m	��3�$�`y�Iz�B�L�Kށ��즒z�0��R@�%q4�
�`6/�k�0�F'��'���c0����2Yd�E�s�������|Qծ��鬆57�г�&��u4��Z��HK
�7�6b^�g}F�u�kw��)�'���4�bU�������-QCקv�E�x]��q�ћ������!������4�G���W�u���p�%�b*�p
1/�+Y��l���.����H#��>l��4լ��e{iމ2f�#ZcC��&2�9�{q�(L�y2Ҍ���9������O���ѝ��Ad��V]Z*����*36�T=�]�b��P���ݢ�Q���sr}_�qg��538(�ʬ��T�J��?<^���~_��Ynjj�;���m��9L��m9��Q�1LG�o��s�]��FMS�iI^�����H���b��]�)yt፠j��5��9���m�O����3���4�D��[�>��I)�Qӆ`��j����`������A��Qx�R���`T��ݫ����|@x���aY�WK�=����׹.�o�n	��
�8�^	�%�|w;u/��&�Ɨ�n��˧��߬>_]���E>(���~_]���}v��?������zy��?_��z��N� CJk�^���}OQ�T�ZqI����N0E�����,����q�v��q�V;'�V�A+��%�L7��3u1����n&_L.�S|b�§y�䆷��L.$���!O4�M�H�ّz@I}&3R�ߜ����8���=��{���ˤ}!��F�f���O���SX�ۏ]8vkH� i  �Di|�F�JY�+��	�9-��� ���\�����YnQw/�lW0��pp���$��U���V�����j6G��H�
��y�	�����B�~_�hC3b_[:C2Ɯ�ӽ#�}m`+u0��}Yl� ��_:_Vh���F��u!MS&���1����Ȃ6n���0�jY���Og� ?T��v�$���g�����=V'W�j3/g���w��W��é�r�B��7��an�Q��gi"�~��n�����Mｒfe071�٭ Ã�cn|�:��ݶq�T>���]�%�9�=�K���"���{P�2�jqk�K�ŝ\�b��p!Px?��T�X(������e�B������;��J�FVYY�G5�!(մ|L�Kt���t@�wƟ�?^��^\���2���[�>M�w����)�L@{�PJ<e��B]���)�%�� e��H tQ
�/�祉_ԏv��s>j�~��>�}�z@�`����yg_^�:�\Od0O�׹d Kn��1l"L����;]y̟N��OL��.�.�_C]��;�m�ph��O�_/~PR��=-b����+���Z�GT��^��s7��K�vλg$TQ.g��w�b�����S�9蜣K&���@�׺ł$�l�]��3Et����.�����_^f�7^�3�ss�J[��t��� ���_�4�����'�g?9�o���jĤڻ(x�CƂad�V�z�e��ՙNJV���|�;t>���8����$��2.�7�	���<,�˃������(q��U��S�nV@bN�v�9�Ƭ<���i�\����J6�yf)� `�yx-[*���Ш�`�?pG���[��p�?���Ţ��M����
��a�yd�g<�̶�
mT�O��;���wk���3F��V�wf��O��@_����9�寁�)��Y=u�

t9�#(�07�D�I����\��\*)��@����v�A;�vƬt�zN�!܎2KŁc
�nHY�n��F���DV0�j_�F ��Mh����4��Bh�<�����"�k�;�4Vw>��5��\y�pM,�̥g�V��-7'r��-�LهP��㴤�d��fm�Dcr��z �[��q����>�� �8�      �      x��|˖�8����Y��k]�3*����;;{�Z� 
�AJ>�V�����v<�Ajլ����%�@*$��v:}oeU�M�����e.;�e�*��s^N��5��L�/f%/2Yej��	�G��S���<�+^�y)kn���u%�v����9�{��g�ӆ~�:�����������<|?`�)�Ld���"�0�l!��Ķg���O3�x4W��Ȟ��,d�<��T��u��Z��xП�Ĵ�����NW���Q<?a��/�d]o���;>�/v�Q��a��ES��T��6�Eo��y	��s�_��g��_�$r"�fkEO�j��HL��_���U����Q��q�$6z�oR��+`^���B�EI�U��?
��$�=��=TE�W�T�(S����<v*r��]3��ºUKQb�li
I؎k���M�Rf���r)�9�כR�<���9�N��5�z��"��YiZGYך��ˌ��p���ֳ�$*}�uz{q��+�v����d��f��=��읪��Z�8���O*����VNy>���n��c��/'�&%���Y�z7d�kn]��ء2��ƭ�|R
��K�8
mVW2_s�Ѫ��0b���5���ĄW��~�y���Yl7c{�;�y�i&k�L*a�ۮ�5.jUHER0Q��(Iv�V~L�[fԐ.��x^V�f?��,�[�)Tef�k�=x,���iU�Y�EQ7��KS�1'f�]���DY�]��Fa�9R�}z���Q׀9!�_�f��T�c�ͱ�w��7����ڴ�B���	s\vǋi	A�~����vb���_jz����%�yo��a��^�2S��!�]�`DM,W���\J��:\��c1;��M�,�T����pI�V�l6]�)},��(��4�BD1i�˂Ê=����aY�|����t�K"l��.US�$�h#
3��:l)�Mۨ2m�\�y%٢�GP2'v�f�yB�ۉ��a��%X՘$>'���Zq�)�
�dd#r\��@/d�ZE����,d��ooޏ�N���i� �C�����r����ӷ(!T؅�ߩ����"�,�;���29=��г�3�A�D�),2�p���;~��n�c�jJY�}�7<�x#bX�3��$���A��6C����,vS�L,�Dć't^��zY�LA)�m��r��?��Q��8Yz(����M������2Hs�s�ı�W4��99�[	 ����L�.��)�S��3^��+����I ��d���0e�,�Y���`軰Cξ�+���<k07,����WT��/���`&�{�̓l�v�~���O�eDη�����Yo�|H��,�V�g��s`[=�--x?7r��|o���wUl�����ȿ�0�0�k�XVi���%�#�pE>���u��?�qa��"��F`���������?��e&qɗ�)��A��c����T��[+�!d�G�O�%a�;�a�J�'p��ȭ�S"7��Xz�ɮ��Qp��<���{(.�5pO>�@�$0c�iU����p4,,������|N�����{���}/��.2������i{~�>��*`��u]���'*���&c��aB�p����K���G�L����k15B4�ڿ���� P|*2I8�p����zg�k��y3M7|����^?�
ĭW�ۿ����p�1fd��h%
�6Z*,��, .$������Ƨ�n�����J7bC �j	�l�Fp��]a�ڵ'��ph'_/�f�W���a'���R4o�sQN[��/�v��'�q:i��j�L*�{�B߆^,�f��ԓ'H�9N�{L��l�:����1\���1�P�x.����V�~����==�^��Z6B�����1�x���`H�|@�|�@��v��uCk-�������A���w�
I|a-$� �L���Þ���+�-D����6��8�!�r3Q��yÓ$o�w�(�k��Xf4=1 �ć}�T��W��=��)�~3��}��� ���tG4GXg�(5��S��N�FS�ߏX���_Z?*RЖ3�E�� ˺s����V�o84uв�䞱b��[C-�;��o)��� g_����J{
l>)�����=��x��#���>�-���?\�~8���~�|��QBp�x��A�|9��`2�t*A��j�=���({sz~qs9�w����^�@�F������� p�&�V���L�bք�[F%�9)V�A_B�����2���G��i-r������Ƙ]�*��G�|)��3EI)8C6���"����o'�(���z>�iZ	��lS|,�Ϯ$�\u��[����j����$�>��n�����$����͊Z+YI�
W�4~��fX�ʸY�$������
j����0�s���&�!��Te־N-W���s6֝�*�Z�������n|}~�^�ލ �F�!	إ,�%�AN�6����Ki0�v������0!�k�}@	�'RD(Q���q]����ʥod��
��]+��UsD�i�Sp��gm|ϳ]������S��B�z����״�4�q�S������a��u���t��n(|DK�?��@lv��[ؕ��W���JXS�� e�8��.(26��d��G!���_ 8�mc�N�!�J���/#���/�ep��T`�h&aB3Y�4��áQ�ĬN/�a3��9����[_�F�������)���\��@��eI6�lde��b�[ݎ�DXe0���(@c�R@N2��)E.���Ѽ|aZ$EZ��*K��x��%@C�HZ��Uh�`]�'�x��{9�C�p�#P��~����Aǝ�,�����6r���y6��=}	Wa��#@o=�SY��@K*�(���Q�tN�O�d�$��7�("�/a?��B��sá؋	�v���'�8v��Ē>�:�8(!���Z�n� �
�}�ȫAt��Q����4�3�v�Z�U�u�Ѫ��bT����҃��'d�<�j�V�
��K��%Ö�=
��q��>��.����b!楱���1^]�k)/+M���=.�6U�O0�䲼�	��l5i�`J�L�K�>���'�-�
&h�Aǥi�ŒE�@E��`���NamJ�/-qc-.��T��f��.��i6l3<"t@!���7�)f���3ժwo4O�2�\X?�ZL�[Q-^h]J�MX���$9�a(�B�;l7�.L�}7 �����m�f�Rt8R!���O)R��a�)����Pb�ԋ��uA7@:� �h�m��p��>KBv�mu~��O-'o��A)�Ѹn�D��leZR8�.����{T.)���1�'�D�ú��c�3�kÙ�u�V�z�؋��;���εv�X��FC��-8=x���dd��f��ɝ`ڤ�x8Z��~}UtY�-G�O5D�������3��F�����J�u��D��?�\�j����H���'��ّM������"�iB�>fN�tjP�p�؃
C�Ǖ,�%����S��~&�SK����B��N5��({�s�`���P������YMa�W�,d0hF���6Z;�R��&��5�[ �I����h|z�%��� ,,�����V�T -`Kl�ԍi�����Ӝ7�R�Y�-��F�������g�t�m��a�z���	J�1�(
b�{�9�u۪Q�!�\������J�i�F�H��-��R�����6�ba>����I����3�j�m�)���V��� (�Q���1|y����AU|8��CF	גi���;�ԖP� F�o4{�z�C|�F�_H�
T�����#f���ºUm�����^(,@S���*��=a�`��u"�	W�v�O��[�� M�3>7��Q�,7�ɕ���`��4��.�I%��O�&�0�L��?(U���K]$L�	>�#}�)�Q�~.�iI��=9 Ň8�?�:��W
�L�^<='�&�}�R��'�oQ�%TD���w������pF��q��1�S5
�a��8���    \7=Gqe��>
��O`pK���I�)
���]�g����Y�a~|�%��'I$�(�3q��
(f�fR����>��?�?`����>O[��ad�6�w���"fr&�W|����0��54�v�K�=
� �xl�5�f�1�p0ܟ�E#�R2Q֕,�Ąt/¾�,7-�eے.��Ai��F���x1��⍶��R�j�n0��ȅ*8��!�s����;���5����B�P�J?U�9E���� `91h3f9��|��k|*�nӐJ!:S���E1�6h v��V��*Ӳ���4OZ����r�8����,`-��*��Es��ê��������ֳ��� �J�f�~ޅ߱��\� ��*���X&���# u�c�	�jG�R^�q�O��qֽ*��� [-;�c<�%��%�aW�$�\��&�sJ"
��<��-#x!�v2B�"�n�(�#��J��("$���g/�v���w"rp�O��E.�|&t�:�38/���x,��K��PH
3�c �����UО��Zgi��ˁ�����"��k>���:pr��6C�j3��z])�>������ڈt ���P���+���"=b Nd�����XuY���y�\P�S��O�$����?8�~i���SZ��%W�j!���b�������T#V"�h,3O�\e����@� ���ͷ�n� ����LȂ��A�`|n��.���sL�ζ}z���@�0����h�Z���܄�ڀ^谎�ό!s�ـq�au``�%�2!�WMI�~Ň�Ϝ��u��b���<�p��*��)&���MF�0]4�`�yq� �0���kI�'(����U3S9�2%l���	M,	����]F�$yN�
�5m���RP��S����#V�Y`؈u"'�\u��h�R}a4�0J[QF�>΅����0|^~i�1x�ż������q h)MS�2�y䛾�@�A7N7E��:[@e]�m	b�ೡ����򅪆���q�T5�׺oZ����|�M���\&�-<xCiϊ/��ϵ�X5 98�'5���:��ȝ >CNŮ\/���J� S&]��T6�ibv&rWX����� f^�i�_�"�quU�
V�]��2��`��j3��^��k`�u���C|��Ş����WFP��~$�9]4NB;��'3EPtn���\��%H�.��s����zG�����Y���!�V`6����yy��*&"k�'p��� �*���i���t�go����m�|���o��ԃ�JZ�K��Ҹ�ƃ* A~.�`���lA%���:m��Z��(E�L���� �VՍItŀ�:i�-������D#%���;��`�]�J;[Qè�i�W}S6�"�QD� ~5�g϶	��% K�_x%�����@B�H���~P�O�BW�]����< 8���	����?'9�HJ��Ѥ?�6OG�|�S�T�L���պ��ja�5��p�sX��\f��	܀�^e����V�i/��S1��.�o�&��J�}x�|Eו!B�1H�&��`H�G�cXH��6�8=���*�{���#�S8�)�b��V��~��zH�C�,:Fg�?9�҆6���I�B������)ٹKbP"�B��.�����Ź$>����z�s�Ms�6u���ϢzPT�T�U��]؛S�z��%��@�r���J"u.���
�b����9��?��)�ft�߰�T!k`�Х��}����F����Bm��T�� b�i��I�u
r�)B���a�B�6�ʨdJ	4��}���`����.�Ecٶ��J�FY��CG���@Z�0ߒ��@.���}������.���B��ڠT����Wֶ�b�|�I�Zf��xp ".
�>��u<�9+)�v]J���i��!,��kh�>��͛�+ӂ��]!Ɛ�+"i9Q��-V�a>;BU��^�+b���SL�RL�=��#@����dJ��ϡ4�9{�I ���$�P����	3�y���Qݾ2�t\��Q��}��*����n�T�z
N��y���H��9�J]��ro6\?�!��#$,�@մ>n�M.���z��H�����E�.���)ti�%<�B�yeb*;�����A���^��{��w�ر�gt �M=;ށ��!�FQ�J��?A��3*�ɮ�Eޮֹ5�elG�\�d�|�z�x��M����xI s@�A�
�khnZ��C��SC�))ku\�	N���������ZG	�y��VM^뒚l�U �:>&Be�p��S]��=K�6�U_���S���0b�X�� 1#������NS��(Cwj��?#;p��T_��{e�7Tµ�?$�Ah۳���S�����B��<W�ߔjM��b+�0y��^ ����7#Wʴ޽x���r-t��D暬YF�{҈BZ�dfŧ��F������.�*�o��1����:H���ߦ:�K�(�u/�!���y�pP	`(V~s�����Q�*\C���T�?�4����!�(v�*�_Ą�4Q+������EQ~h�f r[l�\�,<>�jk�8vb��������{a�#�[gL�;��Ϥ�k��+��ڶ�Z�罽N`�(�
Q�:�]����Ql"f9��e|�[���@�#��5�"�n9Tn�'=��*�A�\�qh�!�s a�$�K3ݺ��!>J���?8?+�(��D��OUS�J=��@-!S���;��Zv�@+�}�)@��?��.�G��.xT�j�HA��
`��`�<S�>ƋǢ�s�����q%K]�QKP�]mj`bn�"|9��4t�6]ҫ�'Œ��H'�}��|l6�g>�_�7�!Y�Q�T�҈�]��n=�*oɣ0/���	�ClS��K����҉n���L�U���u�����yZ����PQrUQtԠ}�ү�uh!1����11n�I��ŋ��N��p�Z�+���H7	��oV�(�$J�|��b�`U��g�0-j>�ȉ]��:��NZ��9J��1bؗ|b}('�P��jQ�I.ڒ�N�йѯT�7zQ8�T(�x^���/d�)G���_A��``��/�Y�}#F��؝y��VPU�u����������_<�� Ґ�%y�W���SDE-F4�b�(xt� ��7���a�g���&M�9&��;T�1�j��J��LD����9�E2(�K'ۊ}~�L���������B��J�����ݿ���÷������ ���ۈ�G�R���\b�^Ğ�O�I�Ll��<R/`��^�w��zD�g�mzU�8��@�)�k`��Q�b��WF�����w_D��C!�-�|��M)8F��lt6��[���^�:^��q���/)!Bу��O����l�G��ֹv�cs㋖� 6�h�Y6!.������cT��|��.��̉T/�a�vg�3�찚2�Վ�C�W�;{�ζ�o��6>v�9t�u/����ZX�;YXS�$S	έ-fw��>��*�;�'Q���<���q\�A'\[�<���h|���2�ps~
Q?��
���=�m_�(�"*5��f��'��-���NW�k�^�O̠����A��:��-'�R�9��
��=��!l�f�k˥d��)���ҝ?�Dm<HH�J���-�龏=����R��C�p^�����s/	�t���������%6�<�NǟS���E�(J]��d"a�?\��O/���ں�����b'жGo�s����)�O���J�$�yN/Et����'A��q���, �m�ɡ�N��3 za�q�Im�إ�S1W�������/�E6do@ xQH�}ٮ[�S��Г�)[^�ť�F}Fty��
�{T���/c�]����$���� %ӭ�����֫O�dO�B:�|��H�B��l
8S�RƧ�����^�Q��h/Se]
 o 	  ��5oZ��b�E�A��	0
�����D�j��x����{�8�H�-L �h��!lT�TiDI�oZ���h8��Ϙ��t�bMQ�ݕ8�ڥ�>�@ҩ�����{�ӥ�~R�>yE�xP�Lh�Ԟ��\dG�-���u� �~Tۣ���.@�勧�B_�u��pZ���T�^f�����6�+�х�T\���`�����'�5E������?�]��bl5V졢xJ�O�§ ��(�V� l�׾��ݦ{��rN>]=fS�NZ'eC5��܎�_��Q��S���,� ��w���@J���at��s +��;|&�T�+( ��(<��K��i '�/5����Y.}�v��%~�QἹI�8L'�s4�žt�W�n����+�v���.�K�ўe �/EĨ�mL���(N���g��+0�Og�t�����݅���&���(%����Е|�[B8@�@�]���:�p��c,q�B���D���b6�y{�'R�xW�loa�оM�ו�d��.�1��Ĥ�����O&j�B���9�^�6hŜ��=�N���1�4m�r��``½��P����wV
r��3,���݇�\vd|~���=U�:��0�C��8F������f�#]@�dܛ۫b�$Nv��Ȇ�!W(ܝ84��LZ];�����4D]B��T;س�����qc�.jz΅��Ρ��޷ww�=��Q���c�L8NU���r����f�os�����rR�5����]����$�л~ˡ���yL���x�R=p���)gh���x��n*���+�x~ͭt �t֨ؐG��y�:����=�CǪ�n�~�����o��ϝq'P%]����E<ҕ^vDw��y�
 hJ���Cr���n�ܥ�<��\�N(�Hu�P��٦!d�QEl"�4/�p���M�f�O��n�M0�����x٤����K�����
1sX��f}ml{&�k�>!+?l�pw��Jߨ�(ꌛ{6tH�*+���F��+�r%
��{���A��@8����v�5�[!1����/L���Vu-�<��=��n˯��!�;�M�݆�_��1-d��/��EfIڣ�P2]O�𥳐D*j���c���}n�i�Ç����P����h�� \D�m}��)�S҇n�����#��[��w	�0�>�R��54�=����@#�w]H���'f6��汩��F'��h�=H壄��{�ȡ��}}��w�Gt��6����C<P�h���0��F�ӟ��6�      �      x��Ko#�&��~EL6��a��:�aJ�4˺YR����"��#r1W��g18��i`r7�(����ֿ¿d��w�*�ݍ�i��)������y��ۺ>�\�M��Ip6�����n�u;k���0����O�t�ƛ�)�ބ��3:��^�N�8_A��b��6e��i������2��e���M]�Y��ʋ���	��`^'���1]�Ų�}~H��-}�U���I�2��'��U\�9��,�����E��HJxjpÐI�a�
Ƴ�Q�&�So��<�+�&����t/�8KW�axA�C�a���y��������L>�ǭsxk2/*�t��WqV/hb�<H*�WJS^�ex���Y��Y���GW�|S�������*�G�bU�K�e���א�fO�/�I5��[�wi�*���xJ`M���
_�J����w�ZgIQr\�yZ�� �t����g��t����s,ac��,X�j�a�7���X�8q����_�>�IL��I����)�X�0H�[u��71���Pa���d��Wx�6�q뷗��	�o:}�Iwp����Q��SG�7���vG=�dGa�w���d�2�78���58��S��<�E����Sˆ�	�	60Lx��ioǬ��>㹩�,���
���77��vu���P��Õ�Y|_�1�<��E�����U��`i�o.�����ż��%���Y&��/��M��/M��������vPÂ?��|J�Mg4#몆�������U����������d���F�៭7��N�u�(�6�>���VWp	�&��]��>���V�Ň"�sPn������6���;8���_�n>��Y�i��o�g�Zzxu�.�r��/]�y�J������{�v�^_O��}��y�no��zp�V�nB3�+�\��á{.è��ĕ���U�~�4���d֩9��.�����Y�E0���>�p�a��#E.�Q��3�8B,ֻ�3�GpSq9X�%I@�y�u��A�ŋ���b�ʊ���W���ބ����
ȸ��z��(`�`3�_|�5�sQ(��&%�D��%M�0��TO�6VF���ޜ^]�3{(�U���莏>�o���j�'��ɗt��[\����o����߻Gc�\H��Bę�^��Z9*����f�gãC���nxA�'��+h��&�(i~d�
H����=(��#��
��X���y�Q��mP`Y��(1G�Ɔw����}Т��/CxuO��}�;��O΂�����g��������U0=�������rvz�]�A4���c��r�� 7��}��	���(%P���'��<���%S�@p�r��ҍ���>F��销���E����Uk�&��_�y�S�5�gٸ���� ��2v�-[Ǌ��gi<;sI�s������Z�
=��m�T�2<��dCV��	�ުM����$��X��������D�}�;��>��Ww ަ__�\� k�f69�
f��W��?n�S>�D]���Wd��&p�Q����s��=����U,	PY�v �֎��S��lڢ������l�&Ւ����2P&�����%�A�yiQ��7�<^�Vl�&�c������u��q�k��kXï���0/��t��z��]K'�4�>�اX|V��T������2}��%$��D���۰��<����䯈Գɷ�>�,�dY������Y���7�JK~s����|���턃6��9A���p�tM*�g�C?�0�������L� =��4(�Nӊ���e�l�x�_AI��|�����ɬf��/po���X�Fк߮I��3(%���!��6�F��6�X�W����t]��ws�{~"^@����=���XOII*,xH�}�>�/\�>Xt�}�;�>���*^����U�x�G=p�þs�;���zZ�n��}�^���.RP�hA���}yJ3؜��ku�� �-K�-=/&1Q��F�gC�TL2T<���� ���o�z�ݎ�[�I1��֑�ޑ3y	m:��u��"�zx�R�Ei&y��
	�M���{(Х�䋲H�	�MW"�f�Gx����D������z�t:'a�(�����(~LU��:�3�3�:�A?�F�F�ǃ��Q���ۡ��l�3]^t��%� �g]Օ���*�eB�������I��.5*ݠ��'�Һ첸�}�A|S\�-��Tm�m(2�����8�x��J7}]�h :|qp��7Z���%�5�)���pb���/��w	���(V}-��U���Z��S\�
�MF��]x�nENȦF��*�b��©�	.h�c�_,�c�I�_��(�{���pp�O�#���/���Q�n�ӳ�a���a /Mn-�%�'Ѯ�������Kx*���r����6��(yQN*�D�GK�f0���Y��@��2Y�����ں����c1����AFؖh�CT���s.���P�02�؇�g^�����~kԍZow�?��P��f�
Ot�{��߄N8�M�P����#hw��Ĩ��*a5Ҽƚ���Ԩ��@{�cR�7�����[	Y���$: +W	�
�%�|%w,Y�np�-T2MԷQ$�{�g���G������5:Ӱ�_�,���(������\U�<}��������^����$��(�N�GPL WޗE�nܨ�۸Q`��fN+R/|��B���*i��]�#m�j�h,a�0{��+yY��)��c�
�c-�,�dC
|�[%F��d����n(�1v���"�h����uE��=�^՛��K��J�´*&H ��aA?g>�A����h�n������p���ﾬ7�V��e焄~rS�k�2�E�<#�[���n�N�4nMe���<������\��h��&��H�6gɂ�5�i�lP4�)6h�Zа��qp&�8W+�tHI�����9i[X+���E�K{Y�Q"p6��,k3H�n�Jp>kX8`G?��Z���vf�i��-�s�T ��{�Ѩ5�'YR�u�c�j�Gl<l����؜�<���O8��K�|W��̙,�<����$Kh��ד���"wp<�}Ω�2�E��Ӛ��e��h-�B�Չ
�jI3��čЂ�[T�+^�ks�t�<	3r�r	[���gW�{�f�	f\��ov������<h�{��ͣ����Y4����/B�[������'�/�z��/��$j(�1����;�u�U�ְ�����Ƙ�}��&!�k��z�cp��+�T�4�X_-�\�!v�-q:[^`��#�� 6����˛�T��By��@Z|�ǹ�<q��VFW<l� 0@���گu��h���}�`�@�ŤP��PbsK�<q�G�?8��2���q:1A/���������qWo�e�jo�%{��`2C�-�4_�O}~�G���o���'��(�9�%D����`�K�ao@�:�uT`��M'�D"VN�.v�1���c�8��p��2�YW�;>�܍�ycG;dŜ��u�^v�U@���+��6�>�O'm�lҜΕD])ƪ�?K$[���D�"Y�d�|�é�6|���r��Lے&�xQ��mcf������k�c��з�2�Ļ��(m}��������Ih!=�8R��5�~�����F�0T��嵶�%�ohURB%�,?'��RJ��"����4|
�c+��,y��H��bcڃ�~���qAI��=AWp���A|�����`������Q�oM�3�}�9�E�[эD�Y��R5lZY�hC��
 ���
�hl��)B�u%u4�D?��5E�(E�ip>	�@:,���h;��`5e�ezn\[�|J�v����)ɗ�&*~���	�'�@��t	��$8�V��6Kɖ�3����~"��ji���Co-�TRE�"�j4S�ߥ���:ϫi]��Op���:	f���**`�:w�!���t��^��7a�7�X��sLY/H^���fӅsw�0��    �t"#C��q��v<u&������ɣ=0<߻3;e-Ho%����y��<��W�腳��1̺���
[ry�U*`y�����3U׼������tr6��M���&�����2�^��L�o���7���W��/����f:�x�av~6�	��$#�m�0j��Q��%X� ���k����Ir�A��	���m���CL9�`���2Gw�Z��cح� m�91�),�Ԑ�
XP��e�t(�����b�e�V)�J���u��Jm�[�������S��`�`pj0x���T�j��#:�Ö���4;��̧�4������!��r#���	'?�@ʇ�N�U S�"����Fj��]gah��Y*7`e�g���U�qG'��Q7lM������='-�&����p=�C��Z�x�_��(�1D+�3&��Ϯ&�+��u��E�.�-����$��E<��v�Y Ť�uM��_־��@[Z�: ^^ݧ^��|;G��Ż#�"���ľ���9�V?����Vߥ���i��\�	��ڰ��䱀(9zF��1;.�[57�y9Z`��@��ƀ-���#��lђ�u+17y��H͇D���晈��U��%��H�b��#���gl�Ի�s�R�}Q%=Bq�ʘ%l/���Ǣ,�`»U�0Ş Z�*�L[�N��n���bx����������/�̷Q#��9�~j���%Y�h��r|cw�3�`�b �f
~ߍ�߉����"� �k�.�(Z�]8�)u�m<Y�d�DQ���������aN��Z�{K[J0�i#�O��Yj�Dk%i��mKa�Un{6*����f���/!Ag�4.���r+�<E}p!��?:k�|�-�Ƣ��~����ǩ��8aP�2>��f:��;)��Hr�D3�*�r�Vs���mp�.a�1�B���s�C��P@��P�5G�c'JY��4Q�����i�8�HƩH�	�n�=Z�!ԯp�����zwo��7a�j�ar���a�H�@X��nB�V��}1��2����(��·`U�;�;	{G�u�>l�\=<�;F���} :I�r�Nx�ǌ~7�]T�0#��k�-6��Ƌ��ԅ��EJ>�}}���n���N������(Lq�2�-�?"FA���y�M�WC����W�$<� ��g�Q�t{�Ê����ʄ@H>�e4M�F�����M�C�	��ʛ�����D8*�W$69O��C��?��2��m0��h�E��Mעbd����'�rLXo�+�ⲫ�p��8c��+>O3Y���>.���a��|~C���1{R:�����G4��n��ְuW�y�G����8����6���r�.�t��ѬX�Y�q�v�UB�W��B��;�&r��.�(���>��^Z>�6�d��� Շ�S�/�BL$�\P���[q䗭��Np�]!;	/�G���8n�#;�� R�!p']0]�����~d�lZ4v�hg�"�L�}���>���e��H�4~���K���I4�-���N��b4��������{��K��E�V^g]8��i�BU�����}A9���J�sS���+��/'������������_�'�N/o'�����x6�������l�Y��^&��1ѿ��߮g����_��_���V�������E���s"�����].��ۧ�3���Qw�´��=��x�%q����C[�IC�Q�՛�5[�ƀ<qJ|p*~n`J�g�,�6Jv'��,蔃����b[�c�2���@V����L��Ul��U�˲U�<��<�Z��Ac����)��Fz(%�x%0lb
����۪&g��������a���F�{G�A�bv}s���D=���;ltL���Vr���wq�a���9{*}.�_ԘqE�9���`�
�y|��
h��˾%��'t�$Ws,IK�L��/�q[�L�^�έ�b���q��8G|L�׉���Q�gO��!�O���!}-�n%q	�9�p�0�ɖ	��l�6H,�@�":||:]�
K';��n���:8�]��Q"xz�>4�7��NRw��L��6#��1�e�tY��"���%��tJ/�b
r�a}��3�3G��ը�{��(ǀ�e�uw
E�@�^�%w�%��	�5�>CT T ƈ�鐟��3Jheˀ��3�S&	h��p
�����.�ݣn��^���fV��J�zq�-��pA
��d	"m�������z�o6��� ��ua\������ʼL�;����B,�tk���w���J4�َ�I��5��h�,�2���&ʊ��(F�*��Ё�i��Y��'i(ҹIWv4�^��H��[�t�hƊN�f�L�\_a6mЅ�q��Dm%Y������X(�
.͍3'��*��X;4O%��iUٝa 	.�Qt1���쒰\��$SUF8�X�da\�	xz9H�I8�+�tX���0X!�4SQl37�Z�x줐;�L�@�/u�2�nx�%(�t����GA�nیwB#�������Spy*�Et�P�q*c�'�����߶B,���������n��&j(�wQ�@n:ymΩm�u���cl2[��;�g����Ş{�u��m��uF+�%�ȵ:ƒ\Bkl$d�_%�[lf�%l,�-���VP<\%\�""��1�M!��Z��F�ҽ! 4�)%�)IQ�$���ܩR�L���;��ɔg��K�n�$jT%�u[_���*���~5Qv�M�v�g��
�X��p��3s��r�l�\V<�yĐ)=��
�

}�x'A��x�|b��D�e�����0�k���7����iਡ帠R����a�2���1�̫1m
�?0��2ĸ�8����'h����"@(��1�R>�J���cr��)<����z>6�uNQh;��Q��
 <����cc'眲��g����#�Ъ��ǨTe�H�e�5�`��mm'�� � >��{��N߹!���W*����:�T��Ͽ�ջ�>��)UW�}ʛ�ǭIQ���wh�T ��21�T�K�j�u��	,\N�x�r��9��.�Ӂ2a�uEv���F|N�e��T����TL��n��P��8W4<:�0��{(�LVچp2�KRm܀F[B�%]+��a��3�T�7a�|�zr�j�/�����=�R����gJ�2�{�םQg�g��6F�@FF��G?����-�kIS���c��˚"*�k�2`J�$�r��de�L�6|�Ϊ8�Q�&9����)1xb3RW	3�_�T�\q�����z`^p,jW	#��.|��.ع5y-_��:yq��$Y�Y%Io���]�0 ���_OQY��˂ɦ���G�*����pǝ��
��\*��h�9����4�U Q�hpq6�S��������=��O\J���U�5%��q�h����+�Rz�}W�����|e�ZH鿚Iɳ#�1��(�����)C�q,� �I�zs��J?�툶�:1A�2�f�K�#V�1�$�0՗��TE��}�JV�Z��]9X/A��G���D*+D��R%p�TEa%>���լ�{��$��\at�Aɵڬ�<�)��9|2u6r��C��$��D����]���`���(�M�P�$$��07y
X�5�x^�l ��2�5w��V;�I�7wzC���z�֙�H��k�o�|{�	����Uj�+p�E�Ø�FZr��n-�I%�`��G���`��pm�X�u�p0M������߁�Lڦ<�"��.�h��U�G�9J�#����P%��ᇑu:Ϥ֗s�V"0Ve�»gǰ�KJ�QY!���j��*Aa�S�8��(�_��/��1k��з�$Q�B��I4�����;ꅭ���K�u�:M�y��h������
���c�~i���l:��9���l��>Ĕ���:�����6��+
��e��m��D��YO�¤�0��L��    G�K���O�Z�1A (�t�z>d����{�+"̤�Ѵ|SB�9�p?����U���]�n�5���&�5_�~�6k"�K��̦U��Da�}��h]��i����z��<:�"Y�8.A�J=`�`Z����<�����F��NR>P�҉����ٌa�bU���pKe���Me9�k��5_Sj-s��Eƞ
�E������mp��Q�n��ҍڏ{��j^Ԟ%̪��*U� ���5���: x(��rU�\HR�]#n7�0�7B��b�@���N�<c0"H��?@r@�n�S�RG@��vK{��6�<4��J3��㿘X��^ϕMd�k�Ag��2J/)���z2�~�
W�1���[:��
!$h�K�RN4bo,����k6���$ݳ� �1�#�������Sy�`��>Aڥ�Шu�j�����ݻ��p�߄a��n��L���Yo��*h����N�Ո*��S2cpDk�����T˨��vNhq��L̕�BC,��=C�Ǌ�U5R[�j)����m�c�Rˑ�Z��-�d՞����eY���F�|�H�x�.fw�닸�@w�U��`���p��R>�k���({�������h�71;�=�|+H��8�3F�-�����3��4��P�"d�w���Hr%6rE�`�iY��Gb����D�p�)�~ Ѐ*d�%梤h�{��[�7ڛ$/��	����N�6�;GѰu'��^A�x������B�����kZQ�lt��1�k�#ك�i�QE�.�' E������$-6P.��~&-��m�V��xzy��tEB1�-��aڛ�/*�cgq�U�}��AZ',?���!W�zu�l7`�3 �[�'哊�I%	e� 7�f%�CW��7,��I,[:Ԓ�L�O�p�:�=�;¸%�?o㜟9#&�����1w{���rp�p;3~�T>PZ��5���>8������P���yC�rq�Ye�V��������ǘI`3J	*"�O0��Oޝw�1z�<��6.υ����9���F/%踵aOZ���������"�,�0�d��z���U��bC����T��`L�1�A�f����f9wB�v�>��	��a])���=�肪�ؾe�<�]�Y�c�;	�^﷾'�31x��&�>jԈ�z�����1��8����3-�F0�j�7��'��j��G�B�*<1O6Z�rֈ��Q3��+3��D�Ȕ�*�֙��(Gꜜפ��k����MB����
7£��R@��n�jw���z�����5�kL Ʉ\A:��X#7��zԊ�u��e-�i�׀�,T^�4�sU��&1�B�y�V@�#Q�`n��0Y����<W��FC쏴̩jj�����2�Q@�����c�j�k]��V�>�Q��Q?2ڍ�H���eP�a�U����Tq(q�|��!oS8;U�bŸm {cG�Z��~J�=oZt�f�@�B�e@˚��'���������I\$�c�=���+�ݡÞ��Ni��$'���
����`}R0
Q�1ŃUN1WA�H{�#��w���Ȇ �m���d*��P�G��u��{�ݔޚ��mn�x�X��`���ױ篱B����
��Pa��Zf\�y����ce`�-T���Ԕ+����crA��<��oa��x��y��Xp;̊��z��"��m#���؍,��=:�+A�X}Be�Oņ���3�e��q!嬙s���ܫ�m%�L�Q++Ǧ��V�Rz�k%�Zk:3�H���� �{4
4~:C�!ɾ�-��1����	?X:�g�}7|����$�N�c�!�):;w��J�d|�oШw���v�7��t��}Mv���T!Nl�'F���b�f�}^�eCYB�Z���@���
�m��j*:7x�͠X�C��M~szw�O����(|��~�BV���FW;�U����C 0��⡣0$�]_i�Q 7���;�	
��	���������-�b��ݚ7"ߐh��*�,6� ��ˉ���jZ\+]c��oيO�yo=[ۯ�sx�v�?a�מ�)dQ���A��x�+����3r��� UL��.�guJ-�F� .���J�G����~DY*����鍚&WH��}������g�?�ɼ{��g:>���)J��?h<�&tS9i)%{�� �<�#��	U�A�b���&BX�lV
끴SƳ��p��q<��ca���(�{��"�D���xRU�<��9	�ⷢ:MR��pAmJ!0��X�%�27ˢD�0��+m��kV���3�@Us[V����HZ���)J��e$�&fB�E�|
�?�V�}��LV���١���%��1�'������-���O��D6�����2H�AHN��:pSn��:��V�pR_p�s�9}�bE��&�H�;��S�Y(V�1{���˽�!MV���q�NN�`��(��HQ�{�EQ*P�Rpr�w%�\�M��m�$Vz�-�`�H5���Z%`Q�$����c��T�VM��i���gh���jp�*���kU�Rq�8"*���ǯ�J�}y*�dm�e�2
�U����}�+�U��+�sVr��&P��))���'��md��MŪ8#F?E�h�~�0�n�:�F\�eE}ad5&�ZS����b����������VǦ(�ۅ��Qoܺ��\޾������v�z��اW���g�wW������jr��'��[�֦ߏ��X1
{]ů��v'\q�!W�2XČ���ikzQ�,���������YG��4���H����U<�H�"0��Ϫ��	Ȩ[�?���)�T@�	ǌI����
8�(�CY�W%�\SR�m�pU"���'F>�)��P�Vօ.��JFYW4;��w��'RM�p���-P3�3�B�4��N:�{���[SAu����㋪�K�e}��{AE�I��_�.t�F�S�@ӷ6Cmp5�}��;�RL]�@QIf%@X��2��9�K��w1[m��ǭB�P0$F���`��g|NfR��r=A��3�(��D?<�5��e���By�
�)�~3A<!�ØM	��oS�<Y��5�j�!-�D	ȑ��i�_,��w
3��P%db'��jT�g��Wy�N�,&+�g5B|A,w�'��"Ů��ްuzu6���}�z�(�{!�q4�Mo��Ǜ��Z�5��MU�ۤ���Xl�ɕ��Թq��M������g4%�z�����蕥�0`�*�)��oꏱ���:�H���g���^�G�
�olD�XT��sk��@&��8��ü���씽�[�-�'̗��D�.m����'|��Z�5:8Ou�[y�R �f�&K��y4[o�G����)6�'
J�٨fsEc�;�d[���~k?0��KCyi�`/57��?��[�X=k4�e���~8������@�j�Xa�-���b8N�jJ����z�/�t�'��&��J������z�u�.T�^��ȩ-�+4�W�+�
kW��a�Ѹ3]��P��կUku��HO�j.Y���8�a+!?�C��ܢI��k�������VcBe��whMw�}Kq�IJ
��l���p��DeR5.[ ��Q}�;1��lje�pܐV���&��A���������u٠���3lC�A���UC��j�R��܀fF� ��Co�_A�y�@q������eo�R2K(@�6׮�{0NS���"(6XC"��1ʟ��l!!���a*s��H��D`i�:WM!сO@Xp�?s�+C�N�ҷ�_�|r(z�mp���|v��JwJ�n�±s ^S�K�l�Eë�6�� ��C/�Q�m�u6��xUX!�Ua�A�Dul=Ygg����Nб�vp<���������g۱R�5���Z<���з�@�}���J[C�~�R"��N#��%���\Ln�x��p����nt��� �g�-�,��霊әU#6�H���b��=7�w�mA�� ~O�W�	-*V�m�-���ac��Wh�KI�.��Wާ3%������5�\p,U�<~�௷+oꐡ��+�A������Y���R    �a��l-i�H��~�uA���{�	�];�@/E4�G����G{�7;�*����B�����&u�*�nnRWL�M� �8!�8����'����X4ĕ�s׆צ�p�3�d4M��bQ�R[^�"{~2[�M�<)�t�6��ޤhx4[06�F7��#.!X�^x4zA�Q���`�D�&�(k�yyv?rCR�
*"M+f����
O�GA�9��7a<��̞!ܴ�.�5X��'s!�"{�Nw!��l�Dv?`��tr#�bf�&!dk���0�X�-��V��H�����X$��\?��n�сzk����#�M��PĽ����U��OEuŞ����X�3�S�
�c}�!�M���E�
�*Uš]Oe��!��뽬`��
�<�M��dy��0ǭs�z-D��Ũ�2�4˴��؃Y��i���0�C�&��21hǶtM�3�a�� i�Lx�ȷ��/���?�:�Gj���6PC���pP���m��F�R�yol��C��ǭS�����g9l4�}�@�M>�F�O�����Q�E���/R�v���F����P�������c�}�b�j�*������d��(B������{8�g�4L�}YYDc�}7�e��jv����f}�9&�96�a�E�|�s6k�����@F~�&�\ǖ�3��tG���T^{{����Z�Y�rf��Z��f�`��'J@<Q��N�q�cR6�w����{i�C0��{��9.+����׻���L�^i�xz��6���&?7M�4g�c�mS �'�_�v$n�C'T�;Wӯ��9��jBB�t3&�tmEfT��D���&�Sǵ�י7��B�XW���v�^���"L`غI����aY Ȑ��a'F�>�}3���~岬�qc:�`��X�IAn�*Ou�
U���d2Sթ��߃�l��'��M�61�ubѐY���j���8�%Qw��5��.��R��" �i�׮e[A�+�w�h?�`��Z�V(Y���19`���)b���?��τuu:�����-�&m
>�"{/?hyI{��$��i�IvY|k������YWV2��(rff>�͸B�М�MEP�<�h�G�x�ӐQ�La��E�����|N�5�%����|��#!^6-F��:ù�6��yfڜ�VdB:���iXK��k��9���#y[7BHx#i�������۠,�w�P��n��n��n���v��۰1'Qt4�N	>��!��x�*��NW*��<W��	5lT�"B[-(���A����6u�(|Y&R�����$#��+��K"���	 _�%&\[wb�)�֨�@2��uQT��,{~~�x��h�'t��mP'Oŏ�.7qV�rJNI���TB#�Պ�c%����}h�B����s�#"�zGáf.��B^�Ѱ�oZ��'����z�e���T��¨jתb���x�1d}"`s}N�E�������[���"^�Baѩ��[�m���i���Z+r,�;h��<:��b�PڊY�i�,�c@��s��KI�	t=��kw��������R�.>�>��/.���/��T��W8Z��Lq�.�&�����ϛ̫f��M���w;��:��Z���?+��uZ�1��tSO6��W/ܦ��Z��h��ߠu�G~�k��2��:�^�����2�N��$�	�5��3�oՉ�?9Ĵ(��ͩm�M:6��9�J��S��`��$L"H\D���ה�|��"�I�L�wM���? �O���	��8%�`�@��>�~��D�� 9�\�!�㓎/!#�9�[�i�.�������'���}u S���[n�l�����S��~�p�]��I��(b��y�µZ�饢o�F+�51�&��Y�΀ 6}�8DQ��mN��E��o��	�u�窃FDJ��R�cM퉴Y�qDƗ���Ɗ�Ȑۇx����Q���:%L�7�f��w����jz;���:?�
�o��MogW��sj�=;�¯\*I$���`��h�Ӽ���K�_�E>��X�������--. ��t�?�-�b�E�|��%w�V����X���gj�d���%�)\If805+���M�R����o �8����u��g#�fN(�R!��\Hg�M�7�L�(���1��rA���38Ƅ�0j���e���u�Ym��x����kV�?/�kB�ia����.N�L�١��kd���K��ͼf��n���¢�'~M�E���K4�W�.�*������v7�<W���b�:F|�*㭎pR~��7���?�����0.��\>b>��K�x��Ձ����[���⥱�䫨2��$a�v_����FA�5W�I��C1�ת����AP8<���h5�*��,'��j[e�Y�-�2O�UV�I`|�ޛb�u��Z����u�f�V24��U��_5���+%�tù�ש���R�u��'�)<,o)x}:�~�;���}����� �l��e��
e�B�c��Q;��v�f��x"2��f��s��Q�tw
nݑH�Z��v� �`J�L;*�-����T "	?��B��5K����������z�05��?�Yę�"�/��b+P�9:��ٝ����:��e~�B��?�+
i�����4]��I�6����<�f}����j��aغE��u����@np�Bb׋"�ϒ�髎��
�~�+h��L8��<<�_���89i��K�v�L�zj[�����j5��QR�x��N� O� �.q�~�B�Pb��a-��m�(��/��I�]�?q"/�o�$��D'��Ѱ#7D���o=�F#g����Y]I��j��H����
�)�U��@����p�*�s)��ܹG�Fǥ�oM+58�	�&p�&�u(�]��Oz��)��TR��2��`�w�L�4�P3=R-Ps���8Lb�I,�y.����1���Ĺ����#��f��~�N��-{8�S�n]�ݔ�0V�K�2�������C٠bG��������h#2`��ֻz�;P����������@.���؁Z�=۞� ~�D���-�er�K�;�8��؀Ɵ�	{���1�y��L�j�:�U�����WQ
)�9�&;z���O�ֆ���+�c�Ԙf��v�.�c���ɴ���"� ���݄����=�# �u�!!=Z�c�m�L7�V��5�`�pV�%�p��UJ�2�{�{,V�l(��oX�Ғ���,�8��ߺ����'�^�@S($0,��{%B��L�Yz_��*5E�S"��V��䕽|+MʀN���� ͈0�B���Mp
�p/�p��i���X(�ٽNR~g�������݁����������O�I���t'NdY��c��Q���n�H>��^��;��	o-g�m�?Ď\����U���T�3T�=<�tܦ=?@����0���I�s4[o�B�Jr�[]���}Ω�����:W��.�>p�9ӹ�7�|�,�=�P�%����z��[1ܸ��y��jQ覎����)(>��M)��-�j�R"T׻�Jd��o��,���[�rqo6�~RmX�Z龰�ad�����;������.8��ƍ,��O���d�?�Pt� �aKu�������U4��"�gjDA��KfJ�%CI$(+�-H���YV��t�=�abyB\�*VT��6��_⽍ �}��O�g�6�K�)�p)U�0�4�D̐�ݠ	�3�,n�������N������i�h����� J�f��%.{�p����#堅�a�L�E����K��L����}CP���x�g�9)�l[�V[$�N��J�J�]F"��n�K#�ʿ�tGPD!�T��Ps|��4N�J��12xX1��
�61��Q��������-�n�ԺJ�;է��Eb�[7�\�m�+tuvK�BTY����/���yy�b$�q��h42��nۓ[*����jp=��x�A���s��%�p�G-6�iN    �#�@wt�Yp�bЅ�v��q`:
D-ƨV�����O|��+.� |�a+	���@S��ȔNike؄D�F�o��y��V1�ն�郭�m��C�Z K4pE��6���=�C��KM�G����q4�T�!�-+}T�u�`>=mQ���J�Ŋ��&�y[��������)��4�ݨ��׹�<*���6��~�
�������mf�,�O�$ƒ?�	|��٠�5{�]��bͥ2s��"�)�A���#ӝvҊ֏A��6?�]��'=ߔ삁�9Zo���2bҞX�z��o��J5|�!�>��[vÁ�ka��]k��OI��"rY��
#e �lQ�v����.\<�1 �U�a��>L	�[�)|˟>����ZP�����`���\	)cA
�D���TlN
�^`T�"]�eU	�yBU�dt�;�o�X��g�;:�ZSΒ 	�&`����IY���=ph���j6��o0n��&L��9������� z�Z�d��pu�)�9��V��HĔ��kqFc�<{`��5��Z7,��F��������"vBA6/u����,s:�*8P��� �U���o0��f�䡔�1�7����t+ �[P�_ualm[RSjw�F�t�n�I��J�>�h߀x�a)�F�i3�dta�w�tF���c��`�~܁8����M���K&��BakM�|2��U6K�T,�jq��-��'�£�.����2��Y���c?�=Q�����`{��cV����0�6�ӋB�����En���O�]/�n�ED�؃��tH�DBuY��i��?���i-yqA�+Д�m0|:U�ݦc�U�n��ѶO��:wz'Q�� �CGa����N0<m2L�h��ƋZ����u����s~�����2E��V����)�4��v����$ӞYl.�ckk���۔N���M��򺵨ATm�jWJ@p��F��L�]%������&5�-ڊ�+���GF�
T��������>|fC��D��>X����YL[z�B«\����ֽr��W����V1"�]�^j;'����U�.�'���R���Vy�[�s�����oa������q�C,��6A	?\��bzKe0křʌe����'cD�C��*��G������N�K+,�{| ���QC�oH�^(`A���"��N�xs/�_��b:�q����8^f�m��~7�I��O$귪K����kj~h�g����WB��W\	t����җ�|��$��05V�5 ����?L=��a�I�П_�.\��C���'�w�u#x\�(w}uV�w}wz]��N�I9�#�/��
C�j鰡��t6�z���S��*��c1QQi*˃�(�d�^[�Z����UL�[�RI���.T�"���;�C3Ӕ� ���~&���V��a�������=�T��뻝�����y#mǜ
8����5�N(��)������i�j�<�M'����f�~�]kY�X�Ĺ$����#b�eW9"�f�Ԛ�C��0�C2M��ҫ;P�͕4���t#B�ߑu�4,ag�zǳV�͵Ҿ�R��J��;���Aey�ҝA���[͞�)�8�]c�n|��gH�z�ޥ+�$�d2w ��ƭp���[Z�ڞ�!�����c؂��o�� ��}@J�-�hi;�p|�o�-@�׏\S���/��NE��������uo��g��nUV�p6���,[��gN���bU��+L_Y���2�-���	�#�Q����Aj/b�*�+UM�zh����4���o]t��e��ƽ�Gz]A�I�ɩ�Ru5=(����?<�=�۬��O�1�nkB�HK]<9U��: ?�=�Y� �I��2�(���z������R/���M��	�/�6d� �u�T$Ͱ� .\xS�z�T����ո�jzf�$��{4H���ka�jٕa�T��f:-7ч@|�
VsG�}�%b�e[W�#�𞇽f2�]T!ak����c���wC��n���A�B���(ɍ�{i�b���Ҩ�
=��S��c��ql������Lgx	m�M�qn�fN��<�.+s}i�U�(�;�7�q�^���s������h<+w�,�z�����/�c��u 8�c#y#v��n*=E�%�Ew��D1 l�$S)����#}�;��醙��AE��nX���9cc�~{������N�Oq��f�!�88�+�ȟ~��!�qX];�`�T%g|x?��\?&�GGcp/���i��G�~���^���h=5-`B�L� ��n�z�e���18��_�Y�����
>�σ@��q��*����R|����6u�^g5#H��<9�	c��H8`T|�+s�E�=����!�.��{�[���ls�B'fH���P�Q�i���ӴD!�E�:(��u`N�Sxh)O�����Ba@Ej�C��5�J�yu3@�^�UD�����&V���\�ۦƞ&c��_F< &Y��h�e���D��$�	�ʤ�Ezq�Cd
	U�؟9O��/t>ȡOy7	�v6�D32X�͸��J��'�K����g��������2�T��g��������jA56{k�˃�`=� �G�Aka�7wB&�&G�x�8iݾŲ�V���E����9�x���58k��_! �1	�4
������,r�=�eQ�
T_���At��\�R� �Q#��T�Է�u�U��ԭ�2�݈P��^\Z���ʇ�Ʀ����
4f����*�����\�9��r�bڹO��Ӏ\��n��vZ�������y�z��I��"H��/̳��
�r#Y��+6v���b���ު�LӊX�p���Ng��03�"�n��(Q��;0�zML�1���	��[5��Z%�5��K�Mb���D�����p�uA����N�!,~�u�Ȁn�^5�����Li|�,���h��6���vKa�s��ה�3j#1�P�x��²Y�H�C�ڀ����Q���w�/��A(������^ߜ~��tHôO�T��^�n��@1�f�I����f�l�j�Zۜ/EV��m�qF�S���(���`s����`D�VI��u��ѿ�+�Ζl��̃-*��Sn ��Kj��C&��Tq��C��,Q,��=�O����͉@�*݊�$Up9@Zy	�^�^��z�l#�
��p6!x�q��u�&{{�D��I�n���n��C����g�'j�-	�.kM��&3�14f���Sg�4��6���>d*d̶��R��W &O�.'�f׷����E�X����t�������{�lPpKP0\���W��"��Д�[�{�����zz3��}CdY�n�����_Lkv1Z����G��nԺ�'����q��IoHJ��:��|�.k#�x}L_��0}���镕!�J+�����զW
�� C�tq��O�d��&Q�����Ѳ�?�e3����*vx�b����mH�W�_����3�-Z9em�q*�,�[U���T�v�j�+=�Hp�-S�{��ǅ�p5p�=l�v�p���G��y��mٝ"�?��+4�D�ѠI���j�ЮE�^�~M��`�����Xu��	��?˘�u*χLx솳�Es�o�o��`ɋ�`��	�|�f 5`dN\ō¯#\�_5���h������wZ��"
��	<b��a��'���mlS$� �6ˑ���A�����L�����Z�u[)	$��r�'���Q�OS�Β4� �"?!aM���G%����i�p�����4_��\ӳHz�)����S
�Q&5)T5���-WԬ ?��_�T�%ET+@��0d�J${�{��0�Y_�R�i��Q��|nZ��L
�H�r[������0ګ��� 5��y���T���c�__J݃Oi����f���M��@���b�Y�h�jv�al:����bd%\n��+�]�:P=IX-�w�K��J��;u���T��9�pkC�]�]���G�)�b��$N�v���r7�%I5��r�Y�g    Rl�%��
�X~��y�T�M*tn�"fl�z?�FH^uL�G���C�TpO\�-6�:v��y����{y�Ύ�nj�j\Ј���vSHD:>��j�&�z���Oނᯟ]���ۍN����"�+�xN��;�w�+�1������@סE�3 ��3�
�N/�4��BeB��S���w}�ۧR�.�`�5������ā���C��;�e�2Bn2�e���.���}�P��`����},(+�9r�	��w,����Ԡ�-����{eCI�E݆iE��X$v�����Я����4�쾨��-�9��.i�����Ĵ�6�N;!5�D����JTz�𺯰�Ϯ^�"E���i3i �^����v���J�B��Sd
VG��i��$qe�hA����ﵽ4�@U���ɜn�&�E������O\��[��@�V�O�lU�z_����o��Ke��wG*)]1qm͚ zΆ�m����"��'��{���F n��P�g$!��5�v���Ig�p��0p|l�@	�X�������I���Bw[3�0ʱuM�/s4�uL��	�1S��qP �Q'�+����8Gl�"�[�-$I�l��-��'?[6a�cv�t��T�1rS�_7�]���F�V�7<
��s������k΅p���������&)?�1$}���J�)5����L �A�u�����)`��hݖ�X&4�w��'`Z��"�/�6l��3
ĝ�X��3l%��+�X��JJ����4�{��rS!]D�v��F��C�6aw�ag�(b�F�&۽c���n?�㿝��130�z�a]���EN���n+Fo���P�s�����V(��Y<�I��'�ہ9����Rk�YY��^��H�a��2Jsg'�왲�%�]�6��l%����I|0J����;�vF44�t�`��>���҇m�"�n(C=��i+΢�2��"q�K_]�D֎�IӄO�*�.��?�T�B4;�Dc1{���ȪXęQ�s�h���K ��d	�\ڗ�i��ӻxw��0�T�A�u�qL�9(��%O:w~����O��R��$�ɿ(UWH��y꘰_\Phu��J1J�b��HcKp/,,���Z�����S�Hk��*��ʃ��AS�Lkj����fڂ5�����v#�=�mE�{�U���h�L����*2�x8�:�rf=�E�
X���˰�A��8��*�!ӟr�a���EU=�Oky"1 Ǚ�2ԃ剙Y�[MY�^Y����,�9��뫳ۯ^8�����O>�����Nk� �~릑�2�O8�jO+ ���1�-Q�DмVt�`K}��Z���ZHҽ�1P�����RzI�dw���)^�1�&
�ԇܷ�����Z���:��3�L�dY/#v���?:2�|q�!��~��Ow���۴/�$ȫ���C���^��R/����g�g�7��,���ݸ�m�M:'b�Ђ�YQ�M\�h�D� �܁=A8+/��_��U7*�b><�36��%'O�G�ǐf]m-.��8�$2d�	�,3ҜݓT���g�j1��4�4q����+�-�4�Y�!��	%T�Z*�ƵZ��L��7d1��#�ۣ&�l�F�ۻ��݇���7����9���9�����1--�z$J���\�Cy7-�֫ɳ�5�����1��𮭮�!$�S�cl��[���N��![&� e{��g�RAx	�c�u�Ub�ͱ�ͽc7���+ӭ1��)fnV�*2�v������P�=Pz���#2����ؓi�{8_a�M�?iQ���!���z�"�>���S�ʉ�2|pK�c����2��q�)}�Z�$��9۸cC'���I���@`l�!"&���T���d�ǚ��5{+���6�ꀇ�;���cI���k9ą��q�#�"Wi^K��+����=����AZ���������C^d����"|�,�P��J��'���fr���KA�y7;��vy��%�B,�׸[��08.'!��K:oUPa�\	���W�1-���d�D�
�����d�30$�)��ׂj�1��ۥ�x�2]�V��U%�p���>G�5����ć0��]�b厴u�xH�,����b�E��T	Pz�f^2��ē3��)�ݒ�� ��4\��g�ҾM
Ə�S9�'*�ڶ�wpCG!Q�,!��F�6�D���/J�����T��a��9���ͱ���o8w�����R v.�Dv��å��Un0[0�@X3�(݋�)�������8�{���t���B9�3���j���?�)�T�/��}%�~�����'8I����C�� �FS����"��J��'���!�,��	Wۜt|[���`c;��$�/6���c[�p�n+�-��!x���&�`��YTa��#����ˆQ�F���OaW��\�� gk�܍��CK։~L�߫	�H�KO'��͹l����+�<u�I������	;�K���ҧ���6k�ꏰ>*�[�:�r<ˑ�~K��M���v�#v��\!6��|�v��T	��6~.]��A�{'e����t��BJ��;h��]��m��>��W�J9;$F��s���)�)UEU�6j�<� +���BH�n��1Q�%�U�	� �e(m&8��~����E[��ȋ㚽��_�w�v�z�:��TRz���z`�
��Yg�yY��>��ޙN���w[�X�AM:��Y�Iy�w?�baV%Fr4�Pq'��Q�+���bCTՁ�.<Fq����ض��U,�.�cq�F�: ՚;xĮ؉!�8�U�� �/ T�\�%; ����a��$���6-��EY�a�h�U�Qo�o[��)F�r�	�����1��M����x�t�R�P�.�t����N�m���4�H��Ƣ�vޏ�jU(��.�����9͌��s���MA"{��%9��
M;š��g�C�I����n����3�옱?sGe�I�AU|�W�,~�Xy8}uu�X*�4x���!p8RЦ�v�u-O�3NЊ�
\'0���D]����nE5.��X��QO��������qXfZqW-m��:[L&���@�gAg�ta��K73�>��[pd��;�w���G�q�Ŏ��Љ�BP��`{7XY�I2��E*�>)
mb�����T���9��e�J���Yg�^�������E3d�,��U�W�M�Q�l�����;{Ԓ*쇭�*^&`���-�km�`��6��f�5�m{z�xP�^o���vz���YQ/(�PS ��7p������F��ۆ���$ b�Ak)��!�
�f�����.1<$K7��PVp�gS������R�^3$j�����6���e�������)͓��9`'{���IE����~�U���U� ç+��\�r�hu���0�N�Q��]�|�	в/;�=8DmvZ��v�d�BúgDܟ�!Ft������A���Sn�V��'�����~���&��m�̔�����
�y�IQ��sWz{��p$���(�����$�At�%���O��s�|��6��s_�1�`���*g�6��k)�i;�μ*T���@���<seA�ю���܌Ύ�yaY�\Q�~�N ̈P�Qs|���1����F�����c	{�������By��.0�#�����8��I���� _H�V�Uȏ�a.6�K]�f��#���k'��S ���{�� ��yp"�%�Q���Up�&t����#�mʑ�߻�
�2���	-00}����*&\����k+-�z����'�ۉ��J�z�jl$Z��)�Y�9Ij1.EVs`���ɵ�5,�+��`���-p���B�]c�S|/�bW�%J�ٲ�~�{�g�Sl��Bm��5v�l�1K����>�S&����Gt���qz����R�,��F7�"z�P���h��hP(����!���Ak���j�K78E�/�\��hD���a�L�/$Un����    U=b�t��1��M��m��g~�*ɏ���z��0�zlP\�(@�B�_�S�_�z�3f��$>Y�f�)�aBd��@�G�y�:D���o�8�p��"l/j��=�8|qO,'!����b�A�����{@�eһg[Zs%\�Y�������V�B[]�*���m�@ci�&w��+�j��R��^C�������,ӝui��k8�9�hz�����٨{�����o�':e��];��|��c�����_�0A�q֏ex�@��W*NMkeœp˜PY��29uT�"�_�G�#L��� �2t�(e2��}%^>��$��=���L��5��0|��+��`�#��^�/䤙�N�e��@�L�+ѵM]
?MC����`c�+��}ȫK����*��-�����אַH�W N�O�؂��j�<{H8�����,���6YD�,%^�rVp�"&W��+���e%�Y�C��Ԋk�l���
��̀�*=I�>��a�����~4��f�}!�sS8;�S�
O��w�����C���K��]eap�<e��-�@��/��!�N0FL����mE�P�O{����)����R��$ۛ�Jc��v���$9�&������}��� ��I�߼ر$��H"�%j�~�q'@|*2uݝ=���*2/rʮU�)��XY���ZW����&��T�Y8�G*W�j�)F�e&AM�03��F�3�P�}��kt��ªa��٭@x�lYX|��I�@�);O���}�8˻���؄0��_���M�FU���$�H��X5!Z�Ł#�����Dx_�^���
�;s9�Z41'bc��:��023���I᤾e���}�.��6BP�9ET�e$6��w|����-L��� ���ۢ�1<���4����/q )�{����$�"�y\�y��F�5jd^%�`g��
Ń��q��m	�X,g[h��ZS��*����ǭӫ��鬭n ��p�.��LJ)�����*���星H���P�e�[JI�;	�f�Y`�������^�Χ��D*\EC�ʗJ嘬`��9�v��1��NҞ4o�K)�^�:���7������1�Q�'-B.�g�P�[��n�X@>��b�����|���#�Y�Oc}��*(�²���,D_�R�d0h��hj���Gc[T�)�,ڎA�����qݣ$�:�����귳�`}r:�C	PX3���j�(H�#8ME[|�ǭtrޔ<`ލ:=��r��_����m~? �5v��p������oXO3?���R��ʱu#���� ��%{�.�h��v���S�d��%WH��%�x�_��d�HzҰ۵)�'�˃�S�á�Ɔ���ͣus�x���9�X� ����̅���V[�"]T�����(�4p9����%�N��z��԰~`� dJ{�3"������V��/�O;PR�kl,�aFcPI�
��LΎ'���D���K�J��$(�CA��%���:����t$C�;�x �_�Jd��+��uWC���lN�>(v�Le����Mb����9lR�u�����})���������|e���o�~[2���<��l��M+3eQ�HC���}3��M��^� s��⁯�JY�T����B�%'��<f��J'� ��
����B��?����<aL8"���D^h�Q��CU��k�P"S�6���/*_A؁B�P=����Kg��y�����[0�ك]��]�,KoK��_K[:���ז�`i�`Yk�O-b�[����+BoOp�J}~����gg��R;�6��y����t��{l���V���П2���=��zw#X�5[Կ���_���+�������
�A����):#Xs~���@b��)�m��ou|5�-݉�+yo^�c
�54sm6���Ά/-������q0e#�hH
Ź�` ݲ��C
R� ԯ��v^��]<�����~D@�Nhv�x�}^�����V��&��e8�]�}C���??9!�'�!�H�
[73!� ��V�0Jq/b�v�q��WE�� ���8�c���UT�����NbG�r-h�A�LMd�
y⟥��"]J�
T��=��@F>�
^�ʱ��+����H����W� s��������kfñ��\^R�@�R{U<Y�T�R�[���ڱr�UlI!�Pf�u��38HD|/�*�g�٩>����i�U�4�jMN�x@Tɧ�<�+WAݎ�U�	�È��g9�d�� ���E5��q�!5��j��Mg�S��j4���ր��2�4`T�yUwS��/K,d�h����-�� ��h��2Ql�V0i�W��ӯ���������m������r�ϓ�����6�]������rrL��\������)|�lzLO?Lήn��s���dv:�%Zg\��v�L/�.�&���<����?ӻ�9�sz��_/�Ow�[���4������ד�3�k0������e�f<��tr39�����ή����M0��p1����^]�s/f��۫�ل~�� �����nv:ya�C4���FH��N�]|��M�-|'v�/���ĢR�E��r��a��b&���xKظ&����\�5�E�
�@��j&����Q���$VVY�!㮀����*���sG���?����AVm�݈�8A����j�^���2�'�?�s:W���E�YM�B�趟QB�*��z�P�G�Z�$T�*�ɳ��B���\ܥ]5�Ҿ��4�lS�Cj� �{zk*g�iPVU �����\C��%��u�HJ�w�88S�4�B�L��ԯ��]В
uQ�=��J�X�d�D���e�ͽ�ҽt�~Q
]�^�(쏉�".�,���$��"����XMuˢ8�
�a�5��4�(cE��T{wSi=Wm�M�Fy��5��^��^J在��jωn3��9�F~3�ζ��D�O�z}���8� ��(��w�.U�T�����-kI����b�������fD���F�P�C+h��Q���~WSh�U�o��Z4G��__ ]e��U�͇���lo4�ƌ���r���rX�(u�ڽ�"Y��m��1`|Z(b�r�݊���7��,,��n�EW�̲��)�B��B���iS��	�_� h�X������{�wM�R��l1�p���\hma�ת������T�͔B�g����@�dk�q�u�n�͠�9�r���?���ɵ��3���&�v���Ә` X�5	j��)LN��}2͋k��i��_��a`���l�1wq��,y��hZud���&�{;]�%�̦`�ln$Vǧ�k�wQ���L��N�!/��^�҇��[�Uga����0���f�ڝWUG�R�!��{ �u�*B�-��'�
%�Z�\�!�c��ݦk���	�G/Ħ��@vvF����sl��v�)J�8��`��#�n��J��D��1O��[Ċ���\�K��t1�B�X�� ��}�0Oq�'�`��>3��G��5��̨���l7uǝ�Q'���/߷&ymBʖ�0��h<g|��]��@U����\I:��Q���M1����KsY�&��~�[ڤ�����7��r �!J���̍�8I��p�;@	Ze��Yͪͪ�&���1�Y�f̊���K�׽�^8AUuuuUww[U)@��q�y|���K��������l|Wi܂D?��%$2Rw�0�T�6���t���P9��w�{�/ٍ ��[X��Po�������в��f<�����.7SV�ٓ���4�7�Do�N������^�J�W�Ò�͑}�_~��*�����@ T�dN��w��i^B�����\)*��ך��,+�~�<��r��Z*��E׭�m|���ba�p|��'d�v�60��P�>0D�z�vNCfvNV!�\Dk�7���^�<=;���4��N3���O�p�1v~8h����Z� p�&��n�0��:t����I�9aÇtJRs) ��Y������k	1_Dy<�K� �SB��Y�zzm�.6��nv����f�̦���2~���CJ{�    �����Ǉ��;�߂por`�:4'4@��Y��D_���t&x���/��w������H�̳���(���;��?^TkXݏ��$�� �
�~�bm�+��9�^b��p�/l
f��=Q]�������`B{�w���_;2
�)![�� F����LX{�BUn���u�,%G��ry���kƝe���� �X"~^���h/xR�d�~9��ԅ�Ǧ[��#�#T�m�[�g'ާA�i�2�D���Um|K�D�]�������L���V��rHm�A�Dҡ*��K���τ����;�۴x�#�e�Fd�z��g������U�톦��X��v~�ڒ���� hB�$h���t��E�r\����e?p)��K���6��� �L�����L�_+61$x�u)X���,�����!��TF}1��e�IكXR��q󱗽���r�6�N��������ˬ���bBvH;�vDl���gX�&*+	��;�;����;�C�>Z�ji��.{��*�Ћi��2�x�������G�"8�} �����U����N?�0���K�m���Of�[Z�ڬ�$���܋�����gcʍ�q����~UT� ��=6��R�+[d2����|Q3�Go��49��5~!X��'�F%�4:�hhV �=0[S�O��,�l�L�*�4�j�A�/O-��!`���C�ѱo�n��`����$JɶE��dq���͚D�0�%!�G�s�x@��pӎ�#˷4׮��D�L��^����Ob{$t�	��f6P��,�pY&�ri��N: �W�.�H��U����p�Ց\��+%(l%]NhN(mG�R5Uх���d0b=2�X�ECbu�h݉�m�L����;w�
�>��hE�"��~l���3�>�c;7��s XUD��
�,Ű^ן=�x�<וm�t�/u	�Y�|�D =h��woΏ�O��I`�5_�g��ccA��iTM
l\d�d-S�H��9�1
�$R�̏4c۱+�D���g���RZ���N�/���~e��m�9p^P/�[���!�	�e�[l�jX�y�A�Ӎ@��J�[ �cW(��D�9eLi�e�NS޶���zh��;cDH�ѻ���z݆u�G�����$���d��(ͭAx�^�����$/��WK�"� �����~��|��	ǟj�`HN������4$��X��� ����G9D⧋H3����)r���`},1����:�_�J��J|]��%S�,)�D�c�(8-�g�X^^���V!����%_�:j[XF�ب-Ņ�� *�/A���6/���U�Ev��Z�珍����h�Dz�A��i�����X)0Y�We��Hg��R���%!Q܁<��i8	(7(��{�(��;Jx9pD}1z�|�xUb��Y����6AH��hkc���)���U	,�K����KW�)e5Q��/h�QiV��P�Q�{Ȩ������H�aX%���k0j�Z��w��f�0B���K��~<
W��H�
��M)n4Յ>}��f��`�@�(Z$���������t�N�KgN2R4'ޗ�_鴡&*��@��%Yt��b�p`��O:��OϿ�*�F�0j[j3�X��w��A���Է~5�\��O���57�m��9�s����I�#���YI���=�ai<
�+�#lۄB�w�la�7K�=��Qȼ�m����V�\S�c_��q����L~xw|1���IҨ�a�xFI��s)}�[`/4�{��Q�JVm"�>{�b2n}B;�[u���윀����~��qEK
��p"�	���� �"�}�z�Gf������ds(�}���5�ۋ=F�ܯR�����i�R�vR�E�F%;��v	u�%��N����6��ʐx��V��t���V�V�X�TN�'�~s<�;-?e VB��|�27�QG&!(��	�6��N�o�^���0��#ux���0Uq^�e�����R�%pjp�)s8Cǅ�R��]���BhZ~lE�SQ���}j���&m�\'f�	`Q��DB�&�[�P%�ff��쟴���ziS��ͤ�N(u!Z7�����1�2�r§�j^M�
w�����Z$H��t=��J�QDƑ�Z�7�dC��%�e�{$�A
��XKU9�ybY	:��V�|f.Lif�5+`�!�j|�t�]�ZgӋ����Kc0_���fzvNlvXΎ{�N'��Ī��ٯ�ڋ]� �2����s����#��X"n4^r�~~# �lu�*��0��� �:����@0 iG��#H�}V�gY;3>�͋mW��_h������ ����۶*��h��@�/'.�vu��M_�����������A��_�%���K�@A����Eƥ���'q�Ӳ����<M��`.q�$a����4��n�h�����J\�6��R������- N�N(4��2d0r=���	z��P� L59j�퉱qW%�e����-��;MoVr�9�Ccx�I�A��sJ�s],�q��#Z�h�R��_�C�;�Y��(�AB)��rS(1����*#�䊾D�0��s)GZ'�� m6n[��S{P�"S`Ӈ�5�:>0=���Ѓ�yv�#%6T�a�H~�Ѽ�I/��v�=�ņ+��g������jM]�\j�
%���k�9ox�y�;\8��{uÓ��������~�K�5��@v� ����T��d� =�Ϙo��0��w�I�������%�3߄�m�Eef�L�㥠�Ɣ��ՠ�JIi���|D�3��/ �X���-%�Y����!�F�AT��y���b�0����(�@aeM?�o�z����bmW�G�+I�-2Ɵ�'�Lr��du�K5�wR�I�K_�3��Ӎî�q,]ч�*൫{��R1��w2a5j���,����P���/<RS�l�����^�LKb�&�7�J���ͱ3x�!��N�>�5��'qg��^{�L�qo����N��IP��8AoΌ�޽�x{n�e�{ �(w��6�OI��%ש���>�� �%�EeK�D�l�V�3}�ܟ����CZ�Fi�e [��y�`�W��n���®�� ��dZ�e����A�3.E$��	|6*v��?����O5Y���:����#Ba���Q�@��9�<�Ymt$Ui�BP�<�Q��Vq�W�]���t�oG���!+n8�ДT+��>���B�y���2s�L�̈́� |f�1cё�MG�H�t%|a�jH�ߴ�-=�XGX���mx�BS源�ʷZ�	��-	v,OPj�7��`�'�'��3L֫Gs��d��tn�;D��}B�[n[`Ǵ�y���X^.@`Ɏ Q�#ݝ`���}�t�G���8=���������-���&�������(�!S^<ײ�j�1�ܖ#�v@0�^���`��l��~��z�<z�^��q��9���죮�BZ�_-���)���̾�K�3A� �	Ut��֥͔kUPxK�h��
|�P�p���ʚ���9�E�Jw��
�/t�",M�|�f����
Tl�O��f��˔����c��ƒ���>j	�������4��hNc/�2���S̹Į�
o�]�,Y.�2vA�-�j��`�~̳��?�'�2�	�]X��.f�W�묗ɼ�)�C�^��	�Je���ӷ��~���O�]�ǽ�%�-O�s,Vc~?�,+=�e��M]#.�Qa<��m���/�2֤6��c��;菷��2��|O�;�\��w���Cs�9��amg����b&��T'�W*��ZL=a(˓b��vu�u C��]���"aBkfc$	5GQ��[��bL+
q�2��t��{�;�v���;�)�����v�3����kB��B�$v�����T5F����M-}���v�dK��˝wW�q]�������o�g�hC�aeK�A��;.R(�}f�'�w9߫tm-���6�@j�k�4�}M~Q����Q~z8����xT�ڎx�s�3�.���.��C��    �!��=]�[����yY��,i �j�{�g��� �M�C��^N��u�M�wa�Cd����)�	DPq�n�~B�^h\cp;O�&�>�3��z�L��Fʫ$������;�Ҹ�����Kj�E�!
� ��ȁ�<3�tq��	�	*�S��W�"�x_�~~q�U'�9ʭJ� A�
��ĕ0�Z;�frvq)�m?zE�(�w�O\�!'+{��e��\��[׫�m}��٧O���W����}��M
���?����>�_\}�WfY4|'La����u&՟u��'�q�ʪ�Y����c�z�P���%�c��l��S�üs�k�+��)�#²�6�pJG�L���a�g�vk�^��\���������~a֠ۖ�g\��Љ"��}f_H�`���d�1����\��֜�B��]%���U�9�mC\��_Q"���:�A {/��-�(��&,,�ؼ��(D����c[qqy����[M��z�T�r�H��� ��T.	�T�n[��>���jS��j� <t�=0v�p�#�:���f���z=�W� ]��`�q"`{//Юr	E��)F�04 �q�YZ�Bu'�PQ��I�sA����h�:䲪3Ջ�����*]Zu��]A� ���M���"���� �GH�\#��2?�_�i.$2v;�$�AXP�*�\`�^����?����n_�̽��}}sȭ�qTXOT(sl�嵙B_�dy�yH��N�|d�o��cau�X=T�����%�
�~����oqX�VOm�dk��Øg�$M�CZ{m����vkΘ�����vZ+���j ���E�ly��54	Ȓ�����v�h౒��"�Y8�V����X,�>c|T�k�㵶4"x!��o�#A`�r��Nq�1�W��;��&�*��h��'�n�lz49ii�~���C�k���K��j^i���y�(A�q�h�:�P3�Ec�%v= Er$�>��Sw	}�Mx6�vB�}Y~c�r�}� �kA���Ւz�����˒t<��`��¾{�7��á�-�STed�$�d�fMA������^hR��|�jЕyq�xݰ�!��O�L��p�A@�L�
�U�i7X�ü�$��U��Ϳf�߶�w�̬��[s�~e�U�1����_�ˏ&>���O/�M��~�Y�ӹz������XP��ʠp�4_����X��En�/d0ڀ��
d��UD�	?>|u��Ī�����uV��[��[��k����{-F�^��:�X�s�����`��ɸK�s�9�����k����Ʋ�����p}��)xP7�h�ERUVy�"�<@��U(�`}	d&�V7��S�>�ǟ���ޏ���r`,�e �kD�hrz�L�L^NO�o.̱~z�D];z{d�5=<@���>�w�|����(����H^Uz�V���փ�����R��ֹ�����+�7�n�u���Z��'I�%����Q��ة��E*V�ܧ�s82 Gi<�(t¶��b����1�dt�/�����7%���_+�b�bX��f�4g���yjM�R0��{iA���
�E&�XOni5��p`wͫ�1#���qE�ISco��{!�;#��^Rߐ���3ƶH�?��q�t @�W �O���DK��?�c!!5�1��ۅ5��C�݂�	��� ��z�&�[[�( ��M��l��5�	�OE�7�g�p�7b�NJ�8�O�0����E9�� O��lDk*�&!"+~� J�j�r�j�ML�"��y׀S�ܣgҿeY��&ZF�s��:�.��z�0CQ������2<L��������0m�d�����'��VHR�ƽ���7<e��o�)�>Ρ7�O�I�f�2 �����m?��5�|m�Y�35�$ v�j��Њ�rm�"ɚNY�l�>#>�=�waZjڧ�;9��i���ѓx8rp�C�s@OΏe1���a�*o��9p�'�N'���}��i�F�<��� 2$�p7b}�v�6�Pg��q9��������Tb{Y���:]�����̾$=��jL�p4�?+1���"7[����b�Pۘ�(��m��}�֠1����z���"���~4)�!�S��$�'0Q��=+���'Ŭ�tHsv�sa[L�%������@�#U��Ċ7z�*+S��k�7\K�a�.�]4�x���u�Q<�����3�ƭ��4���ѽ�~G-�-�بӓd�#�[��	����F�ҵױqd���s����1�� ����d�A���|L�#+�j�эt�ݽTS#bV�J�9j{KN����̱�Nu*�~tOn�����"i�+�F�c�}i�3'�a��ftHH�������u(��qq��Hd�ܤ�G�8�	i�\�쵨r���K���������(on��(�d_�ƽƮE��=N���=�G��_�U�E�"����lQ�h7���K%ڔ��u��1W�m��.F�"�\@D��"r���t��.'�f �m������fS�A!`*����EK74�罓��/�	H�*�8�����������lɪ�'?bO^����rh#��ήJn֘2x���V�1q[+ >3+ nM]i Z8rq�O�\}��0����!�\�.�K?b͘�����$�t���H]ȫv���~޶y�"S��s�Bғ��iH}��\�\���qM���n���j�Ԟ�����%Ƹ�?�i�ԕ�͍�Q�����X��2`�Ű� � daLd�V)�����l��?��ae2��?��C�/�Ra��k�y���6t�q�~X u�P�ϳ��o�oWQ�L8#噾�6�(�/�<�I`[Q��_�l/ȑ��>3�+i��5w�~Y~*��U�(!bb�V�U;h���.'�_�V�f�VXoL��0+�*��K�Gʝl���>��°S$�r��A���N����2�|�W̊�%�.�mu��WE��H`J�?tJ��,R�U[y����ߴ�ywm����V+qf0�$����S�|�����;f!����4��;#(���>3���:Ipbc´�����ܨ��z�?�������G����l�"y���������ŹP�\��f���P�
cri:���������vV��!�\�>��Bp�4~D1�D4�P�m!+Ap��!��6b���r�����EFo?�N��|��+��;��>3+�ך�N^O���R��������I<��p{�:���-���
#�(Q��V1p[�IOH=L�.Ɣ���5��i-t�B2�G�y���'|�h�EZ�ty��E�Q�hߦ+P�*F�	��+!�P�g�9btl�Y᛼FƬ�3�s�<�~�%���t#GU��Y�p�+�`�*���)k��@�����I�11	.3�X�F���/�F����6�������t�B�}�aL͡�F4��_��Y���X�W���"/���ڛC�Z���j���"տ�����ܪ�+N8�~fV� �Xc�b����:%�w�w�&�X���a�����V���a󻀒 A�/se���8�y3��	�Uxfp3�����Ҁ��]H�.��sĤ�G�mΦ	�3�i5\ t~�8��t7�!�/�q��%T,���Ra
��H�7���wK�^�O�o9O�ᵣ�a��a��6�C�<wE<�2~UPL�$\3���Szc�÷?��cB��ǜm)�bj����P(-�,��#,3bN<x�u�fE����pMŹ/��4#�O��jbBk%� �>ƠO��i�4d��0WU����� ��r���J�(R���'�8ny	[z�C�g�E���
�� ;12��8I�	�]!i�/6�h ���"-+��攍O�t��8�2Q��:D�k�[����������	p��䰌`D���b ̠1"?�@ǔ-��4���n��v���%'�@����K��P� 3���04�>Od{7�����S��,G��R福فˀ,3�Κ��6'��4���fJx��I�T��=�ydФQ�H<�nSlb<̲�    �e4�h!7$v�cs,������3�>��X�.@1���
>��1([GB7�E?�K �m�a2���x�� ���`1�����8�e1Y@so��o�gٶ��Qm%ު�u�S�dhLu�Rrٻ����{Cs�q�u���Jb�ɘ�pԆk��I�&g�;jQ��������r�&J�%+	����%�T�P�7�I� ��Gz`�v�O�rK��ɣ�SKg󰫇a�r�?�[d{R2��a��ϻ�={���/�g������w̫?��!���φ�Yg��d7A�Md�aD^(_����k�~��;qҧ�e� �M)%�N�ܧEI���Sޗ���7դ��e�!Ct��*�iԿ���%�Ջ�[@� �f��d�:��B�#g@EC*�Ѥ�7�)�z�mM.L��B� 2�b� �Q�n)l����;j��Ƈ!�2��4Ob��Z襳�@���/3H�F�njh_��\4�Qq��GV?$���ZQ�o�����f7O%���#�=����ݦW�{��������}6�<s��&)�?������4���C��#�X1N1�*��/�p�f�v{�xY4�h�>�"TP#� `e��I*�
�l*Z����<&vJВ����W�v`i�Q^���}���$ �X9I(+N!en�R�zl�l?e�=����E�B��9lœwwq�63��3��[}!�~��'�D�%������NY�
`׀��:<�Yj}�rk�D��x�Lt��]�}��'��,�~��֙�k���g��:5�d��������jv1����pss��.��ӧ�{~:<��T�;(U��G��~r�3���US�C9�%3�S���������T�MϦ� F%�0F�w��i'�/�g���G4R����#�M����\ �ĵ����)4��j<jZ�x�J�K������h+of��BQ���u^P�:�@̋0���y�ފ�B��W�����;,2N�i���� ���a}�k��y^.~cV�࿱0&�����	��q/���z�^w{e/��c��ªY�+�m{��V�?�]ut.� `+:86HM(��ʱ�����Z��A����F��R}��9���D,Y���A���w٘/V��`��gSI�`�H�#�=��m�1�Mc�L�����ƺ��7�E�=:1���L ���Ƙ�ۚ��׎��a,UJϲ�A�a���" iKh?�`tǨ:?�u��^���6D��5n�e�Vam4����`���a<��;��E�f��z�Ͷ������m@���r�Iv�b�Z�����R�RI�.ٌQ��^���Y�B��!��Vm��(���
M¨�I��:6p�h8�%'������v򐪉�x�)	�P�øu$��9��*�(��6�2P����7�\~B#ON�jE���Y�L��8{���!���f�;����)��=p�vn&wA�����d��x��R<�n���$�tZ�g����h��C�s2�iMBRx-�$��|�έx�J�a�8�K�B��������NU�߶�xP��-�97�ͩJ@�JX����n��m+8���:�Ҥ�ʅ]�(/�[ځ�)u��w}{t�����~�r�VN�o�Sr�nr��f�B���cA��l�[a��,C�^��K���:�d��&���(.k�K���#�	�\�ݻp-�!V�Bs^��'1��z��gd�$C���K�=�A�����÷��`o�:I�.�3a�UE�el����Ә�@:�T��4�=�̈́B{=��dN&�}jJȲ�e�v�f�>�q�׸4����KD�k��)�
\�.��o\�G��a�k��]��,����=�V&�p{�V�1(>P($b�&�YaJ�^͔�ڪB�`V;|S�]1����^Q��l���qS`��랭w�ZYS1�M'����w�5~�n5&�-��3Q���wA���yW�>������/�/����Վ�ʿm�!{��dn�1����Z�7��÷�~���Y���
��K�L�m�&t���6!�PY�_"E �7���>+k*d�K��-]:j��L�b�W�@�y���]�V/���3d]1�j���$Ͷ�B���G�����+c�<+'^v���m"^�d�B����=55T�J�IH-Ȃ��S���)���~v����.����ZI�����|������-�&�]Nt{��������/���|��z1Q�
�xa�`��y�Ŏ�.L�؁�AA	i��A9�QA����n�?�ٌ��,�-��}�]�
��y�H!:"���1ϼHݣr�\�ko8yM��/��B*��w@�T���������>�H��֤6��҈:5
�P�*�7�&�	��I���s�RA���P���Q���P�D�K��19���Y+�p��B}/�Ą���A?�d�A[����Te)0A��o*���Z �s��l(��Rj��<�b����7��$��-D����q;^��$y�f�TZ�%LK��"s��	��[���	K�:��8':b�w��
�fK�S��㷄K��k��㐂��b����[	Z�/����`�CRh�*�5XpD�Mf�,[�������W��_����z2���ϣ�w�����?�*ߘ	��|�KqCw���@�� e��ǟaC�cR'^�����S2�;������GĂ�hɐ��V�;+�f}���]~0{����p��I}�A.��T>�H����|�]�[�y�b��@a�w��AVx���V$:|��[�!���bqf�O���;Z����Uʅ�E�!��^�k�I,�u�*#��]^�����1��vh���P�1�� ���̝V�-իCs�.v0���Ao�0�� aX9�oA�%�X�fǩ]��0��@�����)����F�A�ۨ�L�j�	Ћ�㡦�<���W���I?L}ĝ��v��{6^@5w@���Ni�7��V9҂<�H�%���E-_�n8�6���Nfi�g_j��o���-lݶ6s��x;Mey2�䟩�d+��8\��{ V�6]��'��uR(8O����&U�o���ͧ�PV���T��ת̜���.$��aC����$�U��݁�3��[�������3�;���a�k��;[;#�]������:��
c�q<��'�j�.U9�&�k��Sa�1�Xۧ�la�
�lȁ�@�?|�־5�6�f�7��cG��V�_�� ��8^�� �&W-䓎XwfNP$��^7ۮ�P��Ʌ0�\V�N�q��=�`t��<Pm��!�-ɺ|����
�*/5�
�"퇞�%<=���3�,m�Yb�u�߀��N�C0�����w���=f �\�P��)�I����o%�����v�h�c��:���������3��3$~bd| ������И���u]Tf��IE��������b�7m�.���F7%�a
�a��Z�W7R���+�5���̔b9�<U�夠Bh*nJÞ��,�4dj[�av�D����}+=H�9��W9��l�_�?EK�&#��OfD��cEsa�n�������(�ߒ�A��^FN����4�9�No��9�j�Щ��HA����L����67v�I�JA��f�Y�J���0Y���T�� �nƥHD
��,��[X�j�`VW��3���%%�,Ɋ��]��*P�֫_��6����[}2�����UY^�o���O�#7������2���W�_cOxK����ۓ���t�U{奕wkz��s�,+�[?� �7H�����N��n���  ����k��΃CY��[�%9I&D��3�V;2	��*j���Գ$_���/%{�>wjmf��Kȏ����'�`K1A;f��ž&���%�ډ��Dd�g�[�-���í�l�Ɯϫ���@�E��1�i���z�{s$_A3ţK�~���մ�@е.�p�%�Q�{c�56��56���sO�7>D<���� -,i�m��iX`��k��[����<����z!g�C�qS�V��(W�]^י��AP4�9�����A����     ���uX䷷���C��8��'�G��o7���T�_��pp�C؞� $s���uY'5�Z��� 6���������D�ɛݥ�K�v��#�6WW����Ttė�>n�D�j���犟���,Ĳ�4��l)���7#c:�Ən�?�c��v�~�3�Ck� 	�TH���2E��ou}w{�\����O���:%�fFa���x�vä�����w��/]�έZ�Ƌ�qz"a���h��XzT���VD���q��h���A8�އ;��ؗk�&ޒ@�
t�+Q�P9ψ�u�!{�,�%X�4��ܮ(��K4��t��c�qzs��7r�=� �Ĩ"�����v�+8eV`��2�N��v;�~��*�����[�\�o�i�~����������.�~+�K��c�s�?��b�[��_�i�"_��)X��q'La��N㺅C���QڦJ�
�^��ZW�X� ��XDɈ�*�â_��%
2>�y8���]�P�+I�����J/߭�&����O��ZNr\5uZ�����{�!�W5��L,6_	^�?K��ʉG�%9��X��ɥ�	��f��O������Y�����х�'��%\�_�Л�	a7>Hb���˳�{?�=��\SQG�a(v�q10��[�[˲��9��[0����zQ^���)%�ly/ ��:������KK��ᰊ�a��*2�R�̽P����b�\�ή�����6�L�/��,% �&Z��s��f�L-����\r:��l=�w�I�0�h��t0�%I�9��!������/P�R~���z�׍��]<f@��Xt�8C���B�(<^�6����I���z���+��g�Z�J���$�Hw�Q�!(.��P#/�G���6�I����f~��t��M��m_a�&(��C�'��	��X�-��������ew,fn+��sq���H��Rin�j�1�Q��� h/��=7a�	���D�@v7��\U[X&o.h7��b8�������yN����,���Xӊn�v �[�������=����Hݮ�I����滷×{���W���dWǂ��{�<��6e��9כ>3�tԚ������T{��a�裐U2�jE�ܗ9��,R�?���P+��(j|�y In���9ZrQ�O-hͬo�m)P��f�%��ǭL��HT~w�jߍ�Ф>��urT2�2��� �:"�@k��^��㚔��mQ�\&�9���D�����>զ�u�O�M�SBu�(��a�g7;�
 At����6Ǖ1���
ۘHz����4��c�u�.0��A�Dp��; ���/�D�%�bU|����j��Ů���?�S�˶��Q'f��=�=3>�7��3���vc(����?v�o8؀�d{xz���i���m��U�HKG�ћ-��-w���M�h�X^ǉ�0����h�����c�¸�	Q�9�d#;�:m�U��7-�"@��I\�o����9F]��c�O?	c�bh��@G�IPk۷g���R!��Z��p���|����~V���٪4��!h$'�a���UR��G���`�`F����YA&J�4�*E����������pJ�~#��(hT�P)/ J�)R	_,���yQ:WQm�JFi�Z�AͥH�r�1������g��}F�a�?Y����2�������5�-�6C�l0��R��HVG]��YR�"�Ɣ�jP��_���-5@��Fd��pT�ZUwYaIs�k���v9k��{�|(;"o@�����\�Q5}�$1��3
Dz6=<>�vw�Adl.�A��Y���
hkG�Ӑ����L�xS��1��!��(b4r%���=�̒�Ep[�e�jd�c��Ϡ��`a7�5��ݽ��)��Lӓ���G}b����EZSckT�D�u}qDeKB���"�?�Q 0��-�#�w�2z���{<9Cc�S�P�iJέ��o�� ��l�o�%�8���f�7[���7L\cKL8TY��ɇi�`���D���]��EK�/�K{��������#�\�?,b@#��s��H���=�"�Y�9�qlN
<(��*�����lƴA�����B\� �E���,�ǫ�੊�5C��f�Q�����]h��>��+\��Ņ)���!#��} �a&�������c���|���I`J��2��M�������f��=��UD1gM���i�yt�����1���du�@ax�m�iS,
�|���� ����ܲ��e�X��=�dO-��d<F��^g8N�@3o'���O���#ۘ�����q� �:��b����l�3&k��Y�.N_��m�q�;茂"p��p����w9sU3�5�P����H��M?�`{/R<]|^�Ԅͤ�*��z��<2�G�����������X9[�I�L�Qſ�Ȥ'$�춚 ���� O6�n���0B��.~-��8U� A#$�ӈR]	���O�Q��ՙZo���/Q�)��)I�\��A����r�
��6+bOfk���,_�>��7N���hЋ}M{�$��!�>�����F�|]CF��&�l��Xܓ�]u&��`d⪐�0F���YI�f�UB( Xa ���{l<�B�W�!&⢑]fc��F�\қ� � ��[Nhc�h��G�n�Ք �9���[��zӳӶRoe��Q�E����\��*gu�uN��J�e�n��&8�I�V)8hi���
�c�c����nV�6[��oy�� ≉�/v�������փ�ҏ���D%��\�*z�����H����PX� �ux,����I�չ���9}��7�n�洎�K��$��X1&������
׺̋.�e��Hw$@�̀��A䞬Pɮ7\�xë�d��d� �J�[��(�����X�/)˜�;�hfF��N�����[�%�����lG����6�j�a5�m1�B	�d�rU�������M�f���@���̥Mo�[��+^���(�f��.i͆��F��"����=�B�fLͰu���80ǝd�wǰ���qB���r�R��q�,rY��7u�B���~�8UnEu�]Α��
�#>�"Z�:��V�\�5^ʗ9�?�������)�%�9,��m4o���tR��5�{X��NKG�8Ԉ:Y��$�~J��b��R!W����PIu�l��ĲbZ�މ��HaȢ�B�d>ܬdK���:~+�:���'�%L�#��������8*�H���𩬊�א���~����^���A�o��j gH�}�F[��o���` W�-�z&	.>$�#Έ�חblP��.�+�|A�k\$�$���tH��ı-q|�*wĻ����$�;M���� �6���ġ���z��(5� !T�ɎUA+{ruD���"Sź���v ��j�]|����ȋ�}������C����d�Ͼqf���N�G�2�nu���S���^
�;=�1kWH��RQ&�{#�{�l@C�8���n{xu�ч�_ﲥ�+Țb$�?���@Y�j���v�T�	�X��,BV 7p��z}C0h��D��2&�'B
�x�y�����+�%�w>�w�2RL�g�?d\Z*���\�����w�g��������Y���ק��������?/^�{�����ǋ�O������eyQ_v���?�o_�/�_����?|?���Sur����������띘=[Dݴa� ڜ8�xu�16�f��ڙ!*˯L�����'[:	�X�J/�T�怶���hY�Q>/�<���B{hm˚1���AjѬ)��$�6��󎠓񺴔�B�{��l��սp��k��t^w��k�{H�����bY9�p<�|;���6��\~Pk��ၹٱe���Y��ܜ\�/<���j���7�5�x����$�����A��U��}�b�@����m��a�_ZP��QhGG��_��4��� ��@��Z���U=A"�M�r�n��!Z$m�Q    �$�nѱd�h���`g��aC��/�_��a���Q"Ee�*���{89�:7��9÷'�.�%���q��~5&�"$�`���8��0�0�O�@��p+s�D��2_^L��S�"^`�r��7@�����O��/Kܶ��J��2>E���Ўβ��U�'��8OO�NڬnH�+�cB@R���H�׵��%�i-5?@���L`hb�:cg�+f���xd���
OJ�v���u$@���������y�O���/g��%�B7Yȃ��9bBp+��}f΄�5E���򅠲CdƱ; 	�nB��P{���#�u����J)l��5xP��w5y�)���'�Ӭ�I�;S��em�gŌK\�C�(P9U�����1/Ry��-"�
��p�6�B����6��Ֆs
^���Twy��g=EL�����i�.�\9I���x��ĥz"s�7T��:`��@�hx�=|�P0 -���\��ӷ�J%��b���d���سe��OL��.�RƧD`*�^D�B'u5��%�3!�)� i�X;�Դ�����2_�X �r�sY��"���*����]�!�j�ӷ?���~��0��Ӌ��q����ѧ C�W��#;��&��v����X'j�S�Vlk�肃�WT�$P?Պn�'O�����.�˴m� ;jJ{z}0ze\#�X:�M�"u~	�����r���%�ڄ���7q�d\Kw�A6�����55�����a�v*� �P5]��.Ys~���RDA.ۄ6U�\g���Ň�t����
W�5�b������ m�ԉjʩ	�Q���ظ�7��1?��}��ĢD79��c���"�\�|��VO��$��I>1c*��c�t�Ț�`B2�g 8I��!�t�)�eV�b�.�"�tx���x	+�M�Л�_k��	���(�m'L�Z;�fw�~�k�IK��Ѳ[�V�^4R����k2�m�㩅�\y���ΠRL��\7��fh^�cS�A/�hV	S�g��zm,����>$7�p~�)*V?���а���D^��}fV���*�LW�f���r�m���$\��Nb��/|�VT�o3s0�j(D�d�ܼ(DA�H\Aj�-O�MI�\v[�������\�f{#V'S
��5�@��q��2����D%��_@ ��%��u{B&�j�>�Il!|ޫ����N��e�q�����2=�S�����)}�J|��*g(y�'�+�W)�:ȏhsŢ\U���0�Cc��VS�!ōq�8�P�+E�����o�b,ȣQe������:����SQ�����۴v۹����7���N��ٓ��i�(o܊q�G
;�h����
d>��.\��ʌ@VY�uc���qh,FI����8V���fLI�,����TNN��=����J�\N�j"ߍ΂��n~/�G�_�����[�b�+����F�Xn'ּ��M�(H�t�2��js��;(Х���^�YZ2�K
'�~�#+e�.T4�Zf�s��6��r[5�/���,�@�%�zT��]Ei��k��`��yy�Gx�k�@�WO:b��I���R��7ewxЉ�>35nb8_FG@�t��T�Vp�mwz�$�$�+T���P�_�A��I�ʌ�|'��	G���1X�I�{�]�9�\L�����éU�S��>hѢ����y_�V=1C�����;��[m?�G�.+�}:i�����G���V��w���%6 ���c��2Γ��W��X��x����Yű��໥�4�=_���X0�ǝQ���KԖ���#�nڏg6��Z*����a	� ��4\��U��.Uv�p�P8c��L���yvK���nb'�y����|��j��m�}{�);tڅ�gO�~�u�#e+%��;�&�*��Ag0�qgL�J��A_n)�W��b���K�i����2o��)�f~O�c��t	\��wэK{ol�<#���	ùRa��}T�1�[���a��KZV���X�ݍ��*���B�(nBiJ��R�d ���	Jg�:��!.����`��Dl����j�]�������ɛ	(�z]�S'n�c/�6������]QK;u�^NoڦX��' �Z͡�&�8? zm�@6^�=6��[Mz6�]!�:��]��j�CZ`�"���T�c%m{�	�L�_��7R~EQ�8��4b�`ɱ=�j,Kһ�7�ͯ�������pz1=�ja��W�P�֞���e�H�.u�z�֓VO���Hk}%
-�PߍnMFq� �t�Z�3�z�)�<����D�ǗV�"��Z;,��[La���Vi}����X
�у�LZ��mԪ�Y�:�*�K ��a.�w�g[���
�$6��i3���8�0����u��^��;�!�͋#v&���(h�����ַ��0�/�߽F��>�Sw]Ǯ�ь��F�M;6P #��e�K�s��L�9bsa ������RT1ږ�!]��Y��-z4g�2D+TځXer��ふ�1� ��|������?�5�t�ø;z֜�ƭ�9����#�N/�2-���j�i���<Ȅ.�n� �:�>�cys�-�������:\�$�5�2��p��;�̸Q�ɠ�k`�ҵEC��N
���g��*7�A0'�o�Z5��RS6]\��+$�A����D�7�J-l�)X�	0���x��&pW�cIz�J�S�1I���A�@�L�i>�6�͵�C��E�p��p�?2�#�~e~���3L��5W< ��d�U5@+�Rr`7&+��H��cW�]�m4�������j����"3��W���j^Z�U�0ⶹ��4���V�=^�A�썿Z�YS&�?�7�{�}��`_�>}������i�M�
E&��[�W�ZZelr�>����(ENĶ	B�N�Q~{��m�{� 
����p�'���[��Q��Qїtɜ�B�`3�.�Y�)�I�H��@'ǽ,I�c�6EN�9�U�_w���@�a.4��m9r=`�t|�+�}�$=I�,o������P{+�܏u�:LqJk�(�;�<���d;zK� L�s!�CC+��_4<;��̄-2���'R� �4;~�=d����������w�}�_,����7{��^�@�o��,�^�����������<8+c�y��K��*�(� �5ф��R�<�Yl"�ȍ$6G'��?����s�ԥ����Ï_�3�`S�)�%�����5��)�yʝ����Hڪ"�	�k6�.KA�,��U<��E(�b,SY�MA�A7"F�y��e�
�K���*��\�P���v3����9f��V&���w �4�1�k˩�F����C�/A�|� ��+y����>���o y@��� |+ta��G�gp�6ڴ�SH���M��qg�Sp)�f�9Cc��y�~4Sh/��|�Y����4}fv|��
��7T�>eNB�b�o���IB5�C���#ߠ{dI��z��*�rͨ�E�2��xa\��T� bS�~��:��f	�1��,�l�I����h/������Yu��[`q��a�B��1_�ˈM�u�y�.p�p�ɬ��͈��m��1�4�Mf���i�+?51:��hzq�Sw���5�C8�D"�q��NĿk8p�a�ĵ�x���3 `7��꭛�����߇�֗�'��ߣ3�Ƭ�v*(n����E��'�h��h�� V�8-I�Aw�5��hs��K�����v� K����?I�OC�c���n�ߺ=?
O�]��e���[L��n� b��>��ǭ�u(7\��GN�\�N�l�	9�ID/%�T�ْ��x@Ȕ7XĹ!2;���Dr���赯!���(2�~s����[����z	1r��6���4����_�n�<;z}q��|7y5���ǪxS�6�/�D"c:���>3�w�"1_FGfvz,t����9�e�^�Oe�#�ꥠ�-$$�h��Ba��FmM�M�JV%����kn$��j�でAf6�e&c43�l����j�Ț    ��D#
��=>BP<����F�:���pE���T���[�W�s�6��7���Ҩpi1'���)Rf�Q:u�5��c\=�ǞS�ܸ���3j4�<z���Z�#�� :dP�!s,rT�����&�l?�e�,��J�c*D 0vl<pM��(�|�
�Zcǘ�{��r��V��fgM&��6�_񫿯�=���Weh��>������wy�C'�͓�e��{��~��3cF���m�\�>㓆�;-���0b�q�RhT��˺7�R��īo��o�Q���*j�:�y��m�kb������m�I���؍�[lı����I�\�����u��9���_`�ᐦKℯ�&��\���r�(.̡l�D*���#h`@�@Rd�:�*k�/�UtS���QdC��b�_�=�����j���Y�ɳ�u���T�1�z�rz~�z�9wu�~�mn��E�������~��>�nys�����@|Ͽ}{]Zj��ݤ�3�����A�6M��?��In��:g�bH�s����0����2�'�$���N/A_�\�Q�l�t�,�7�:_0!��*j�3�~w~�H���R!�M�[H�q$q�R)%{�k��r_�̢G��liz8�Iy)�^e�O�,ga(.N���]=w��*����4�0�	�ƝP�k�|j�������j!��L�K�@ s��}iT۹���5I���k�����̕e7/��L�y@��~��cS?qp��y`z�;�^VA�2�@X�%�b�����?��I�h�H�d���=\!���~�Ϟ$��u(d�����R�:�)l}^R��L����]p��ag���%��]�}�z�T4�eɐ�|�t�/=����c��c*YQ�<�{�x�k
g�(kvJ�Q�Ul�T�"Z���x�Zz�����XB��/�M�)�q�S~�h���9ޗ��ӫa�C��l)��xX0�يW�&���B���6�k������y��q��a19���n�q��?�����������6��O��WK�Q����A�G�Z�c��,��ӣ�y�^�\�E�!m؃# J$ÃΠ�3����9�7ެ?���|�|��Ro���n�0q/�H��ET�4���|>��Ņ;�_��ʛ1�smqki��<P��N�r�	K)�ay��b*��p���:�Mo<����VhU!���j]l��iF�b��� ��%�#����>JbD�~*�F��e�RVP$Sǒy]���K���M���$�%��"d�ĭ^I�%>��k�l�ks��t�k���8����
�E[�xo��27c�����}f��%"� Mr���2\�~��=I�^�+�{�,��h4k���uN���m���6V]�[�D�2������=�`��G�m��l�uh3��zfa�s|�P�<ڡYj����gy�=�x���*��C�?gܿ��,�-�R�.�}�s�5� ��'ɠӂ0���	{��v!iiE����`��:[дd6�]
Ǩh^��[�[�P�[U��u@5n��@/IaH�}v�M�zƄ��jE���1-_�� =`�L�/$ܘ�@<����f����Q�`l��{W^�<�5k�e�հ�3��0����[ݱ͗
�"�Bz�lV��ؒx�[���^��ź�]���K���[�v��'�ST0),����� X�b�S0�{Vp��A��-Ũȱ�Ղs���c\p�e�U��6n�9�oso`�������� �����0.�8Dxt�*G�g�"��g�՞����5��)�a��1Ua�f��މ��>�ŘM�%d�G[eab��0K�Fp.��AAG�X{�4�t��"n��2ö6w��6͍J1؍&�M"(���f��c*�R`����en�~o��&}7� ��	�v�YȭcXgܠ��X���3���~�`�p�C^�#���B�.m�1�fpӰ�;�Ɇ{4��"�f�w'Q&f+l��o�)|?ڇ�?2�U޾�D(ͣ�5K\�m�⼅B�T��0���:]r�b8�hT�"�pBY'��(~y�5�W,�4�Ӯ^6��2H�ڮ��������gc�q b�Y�82s��,)�~8 oi��#�V�H�l�)��Y0���'Q�V媊@v]�jW*�;��{�W'�R0�y�������3�Gۢڗ�p������O?���X=x��=�zU��t�x�7*�a]u>�7��Q�y�������q4�{v��X�3v�5ZF���Q��z��G���?j�̬�u��W�M$�~��ʮ?�[�򯂝{N����۴b�'
$2Z�y�\k`a����JSCz����Af~����v��2{<��Aq� y�2���hn�@)�e���t��75�T���	�JҺ=/��zt�&��5��t&�~�����۫?�dTʭR��Q��s=��M.�xe����ş�ٱ�p�soPׯ�I���������U�ͷ���U�ۏ&�ՠ�r�Z(R� K/;	���� ����{b65�P�����ю��_���x��Z�t�oÚ�WK����9j��q�y�����f��zd�����1�m�<g�����6��,���I��?���Y��/<X�H:�
��I�g��uU���=p�oIG�H�t��2�� Ig�1H�x8��xЍ��c�[�umY��[a5m���c�t<J�s��{��0�`<Jh�����Ot�B�_61��tvyxm�<4�d�z�^xt ��R�t@�~��*�]+\ϲ�[�l��5N�G�2iU�R�w��{�U��*�8�x��!�Y=H�5(	,ls��m3>��8�Hc�f��Z������Y�z�<��ݏ�7ǯ�Syos��L�+K��X^%E�J�d�͸��=��dı�[�$��>� y�Wȵ+u1��C!&ɩ�B�w��@�-��q��eZ��8%)s�xW��Z���:#	{J�9vw�]��-�t�uA�Uc.̀�Ef�YG�^��*]6��V4��m�N(�0|��ojӮw�PZ������kz�(�q�v�c^���z&�5�^��;���$�����K�k���Y�}ڙ��͡d�(j\�utW~���=��]n�!IG�-FI�ۂ�$=L�xۂ��q	
YV��9�+��<�$�S����٤K!2���J�9%F�R���qȣ2� ��B]i�"�%r��.3�z5/��b���U��\��H)-@���A����P؉J�3�IrYZ`�$�+ܩ��]�|�S��f���v��1�%�����	�R-%�#��n�*��H��v�1�۫����E���]�ʦ7x�����f�C���'�p�:AT˩Yث�[�����Pɴۏ�?�~v�?cƫ��@����.7���{�@��79��kK5M��,��ǝhq�k�1��5�O��ո^�M�=�f�ROѓm!I�X��a�@LV2u�Ј�d�o'�H�N��������Bx��ͺ)I7J6}fL�2�r$_�q�#	¼��A��魮	�G[�S��*�l�Y)G����Ƶ�2������n�~��/���%�ҧ�K�ߖ@'xkBB ˲���c��� _E|�S�-
�-��}CާO(�<N4@��H+��ksz����9�)��5J:���0�ڗM-�ڨ㿫x�\D�g�P��$E��Ǭ$���GD���y찵SQoJ�&q����ި�3c4�-��	 X��`Z���'�1]F[?���Rf زR���s��
jL����]��
<Ԉ�8rN{��y��*L`l�8��Y����PZ��=dSe�?��z���;�D0�c�7qA4��)n+�te�6"أ9U7���1^!V:j��J���(DC�i~�^5(_%e��Ad��@�$�%�x� �H0"��Q�L���|�L�=U��pO\u~�r.�29Ƌt{j|+�W4��w��"~fVt��)���)+���_��o�MƝ ����;�Fy����E��<�*v�l�q=��i���lQ:�.+Jly6�Bs,.�̀9btߍ�#6V�9���IT���Z��rv뱴- �O��0t�d��r�h��ѧ=|W�[    P�D�r@���]NW}~:ʈ]�k'B^�.��}� Յ��^�p���g�3aU�nۻ{��"��Ba\��l��R*drx�n�f���z0Y! ��P3�񲎄��O�h��vtee�
K��H`,����ǔ�
a:�L��AO��풤�`v���9���*Ko�Wy��l�+���pz�Q�G����e�{�x[f_�c�`wmI�)��W�7�5�![/��=N�IE&[B�bg5�WEq��@ZXvj0���a���
Go(���0dޠh�k!��)l��B��2�}��X7C�12.DT_����̚���,d�o��V���	����nmί����r��KJ�"�N
�έ���4�̹#���.�,�Y�@+*��k�S�k<ܮ:>�{׹�^���?�|:�N_|�㧝"�p��6��W�95���	�b����?�r5�yZ���ۧI�hx��I1�[�Eb�ti;bE(&@v�m$��96�������v�ϚB���� aV�]��M�}�������gs��!����K����ߌco�j/b�ց]�:�%P��e�""7�F@�R�5̃�x��k �`����o�N�Ƕ��GG����'�p�S�\(����/=F�M��N�%
#za�ea9�h�������'��Dɼ��,t��:PE�6"��p�� uyʰ��[�=��?�������`{����k��Zz�6�HV���N߽vn��}��쓉Ա�Lf�-	v��@�t@tJ�����8�+�XP��N��ư![\��S	�S��� �%��h��KsN�X�)�hU�xb���ײk��(���N�p�@�e��^8I�D����BQ��b�Oӣ.����K&o�JG������%�f�,���p@�T���o㥻2>	ayR���?�N2��v-]4Y����w�Po�;k&�	����|e� t����������#�}���ϳ����|���+��Ю�6/u���� _"�Ĝ��3�3"���`y@�}Y�g�/+0{�_d��<���e�1��ψ�b�u���5�M`,�jfָ23#�G�	��_�Dc{���R����>Do�u�k��y&tH%q�����6�[�B�v[�����(�9��݈������`Q���%'D�f�YRqn��%��H\��:���i_H�d��@X��<8u��$�ɢu��V�g�<��3�ߵ��v5����dҍs6_/l�Q�2���# �2�J��̏�-�%,�$m�A��U@��3DY=��U$��6$	����24�EOa�Z���g��:/�+8���ڑ�[:[>Jb��'�^����E*���`4٨��ng(���g�R��r�P���l���>�M^��4'������e8l	�� U���E����smKbV�.�+��y�Ƴ�-O1J��ۗ�[��G?\e>`�&�S�����Ǻ��OhlG&�UV���s���Edr�m����nj�d$رnO	�����+��J�$9�jR�Ʃ6}�$� �y�&t�:��bad��ړ	}2q�N�[�ǲ��@9�s���Z-�k�!��x����SYѮ�Z�@ж�$�f �H���D���@���6����E�N1��+�Q%��=s��Lq[�)stM��W�����
��j�{�5���?mP0֠�$�j+7B)J���1wF�جֶ�K�ϒ��~ά��/����9��%}�k0�r�gAիg������������P>A�	,�E�q/�����&R=�?CO�f�
���@����M��Ѫ	�xY֫��XCJ�83�:�)��4�9�ȶ�+Y
I5f�М	�aQ�� �����32�<���l��b:"�E�K��e�6�*����1�����8~z'R���
p�a��	%����4���#�Lj%bU=,�@�����=�6�H�a�;9��𝀊�+������O��w�XS���"��g��*˖��&�>�I������#n��E�<\��zxT8O��Y���VX����G߭��K�2�9\'�������&��������&����Ud���{\���Ȫ0�~���y��ﵗ�3��n�3���<Pԧ���@�'ɨ�B7�!��ĉί�[��y��`�$I��'�#k���j����X<���=M��A�^1tƻ�����F� &��̉��?�:�\���{���ǊG7%[���8��J�@�{]:3�'vU�3�ʸ�������-�-x=�_�ВT!��"�]�����;/�UVA��Ok���8���m��,��u�̍���ę�fH���{������ұ��{"�H�mтCL�9�,�"�j�� ��v;j�R���(�	l	���w.� ��4'�w�J@�e�勍Ga�* ��`	|@V��%kX�Tu�J��5�@)� ����p�Z�s�VR��>2ZR�ߔ�#sJ�QlC�<���k�;��h�����G��aI��xF��iՆ"iug���E��T�)��e��T`Ιx��a�l�E6�x��X�0�����A��������N}f6A�2f����]0���wh�O��tVz@���Δ9��(�lH\po94f* G�E�T��ww�P�]ZV�F���U���?��T�5VN���I�T@�x��3��؍:�l�gf6����x�Ѥ�s� 50����q�'�s����Țw5d���:���B��x�C�54kco���3������;�p����\L[0A6���ɘ��N�j�(l�-���n<����K�6|�C��S����>g��b����$'q\P���X����f�ʺut��b�߄��kZ��IFF��e�
p`N0�]G3�d��%�J��i�*�׳^���}��X�z{����~z��Z�&�Sh����o��,�^�������2Kz�x���4��ա��'�a�5v�`�f,|ú.���zK`M�宖��7aqPOΎ�=I����)����[t�*�c6�
��bl�_T�M�p|�Ì��%����h-��_����=
��̬��B�Vtw�q䲯�5��3����?3��ߚ��eC�jM�:���u����0�WAi��utYlK�Z������`���z�����M�~`}q��"RV[d\Y7jr�Y��j�_;�[램`�ϻ3B��k�K/2��P��V�g��I�i��\-�'���)�:��Y(��\'k<�u�
%1�#��G�[��oz"��6Q��!�b�#��]��Oo��s-0�3�Q���F��(A��i�s{��Y>5D��Ӷ��]���1[C�a
7Z8GKǼ��y̟�an�= �M��s�#�I9&ag��v�Brc�(���^YQszCk�� �ua1 ��R���+x��Z�Up�~9������Yg����Ao���x��>9��~�����sY�̾�~�Ǜu���˻�{/~�ap�����b$q�gf��J�z�n�㻺�\}J���\�tr|�#�q/�n}s���	�v�xX �%AA�"ӨO�#��?d��φ��꥿By`��"'�M3A����TP�hs��T��q��5�Ob�eM�?�0+竲_EpW'��V/��Bu۩+��Ņ�Z$qd4�~���kJ�ie9���?��������~E[M[r q5����{a�짴����p����k����P��5�c�<q��d��z���!%�E�C3|+'�"�1%�PY�o�P�� :IAn5�^s�mN!w�,,U���k�����N�~П�Y��n|�	����+�P��dxF����@z]�
��m0q��Yk�f�n�U��4֙dp��-�]�.M�!L��0o��bRr���uY�5�k�N�gL@w���v����H� ���ό��V�zIE�ҫ��ƣqw�o��N�JJ��3�uqŨ�g���l���4�F��h?:�Yz�P?���Ѩ��/�۔�c%h{�,p��JV�!�k�'������v��.'N����}���*Ҙ���#�o�8(W�D��WEq�L    =�ԗk���ɃK�L� %e���Š1!�����J��Β+�l]T�����qw��������Ko$׵.8f�����@��̌|R�,�D��*Y�%4 3�ɠ"#�L��F>��4<u4�@@�y؜�_�_�{��^{G0Yv_�c7�稂�����z|���7���_ڇo훯=�?��{��������%SĊ�y �)h�����`��B}��](�8�(��{hYOQ}��gkbk��P�Բ<ZN9�����e��PߍN~��i�u�	gfIp]�^I�ă2�&|E83�qp�Jо!�+�!��Kbr���eN�����*��,s�m��@lm�-�5������V���mQPZ�����vc���g��<j$:2+Q+�B������E� �7��ӊ��}B@���}�}:�.C�¼��mj�)�@Da�&C�S������텭�/�����D�/õ)@d��f�5����^x�x>��|%i����o�~��?�Uu Q{:��[3�K>�4(���U��#��<N�sn���&m ��$���.\�Zͷ�'�9+0���s�� i������B�PQ�[��J"�s`���� K97x��8ܐ�K��<���9��p=�${�P��}cF��~f�Pp(���R��5�u<?O�u�mj���bP��'X���t�M�
��ʎ�����,��lW��j?����	s:�[�n<꟮�0�P�ە��i����[ב���w0E��I*�$O����W��ف���	ߋt~����j�f���Ppm�YN����q h�.)���)�0��#de�c!�Ku^�<�s�̔�_�bq���:��]g[g�V��5��!����K�~[NQ��� �^�P=V����M���5T���\:�:-���@ ��eT� ��;A���]G���Sni���|
�@�����$�)��׊�J��_�K�P�6<>�l*�:K!�6�����n�LzTF�/���0!>�(�@t	b5P�&��Z 7���6�,X�<�U���=>�F�a;�ټ}�kU�� x�M`n������I�d��d}��j���쨅�\��ѨҡC�E�����|Gz54*{���?�.3˻����r��/gu��G��0lI�-����6�P��q�H�E&[�07���3�}9��a|QS���e��ͨ�±�҂=*��j���p83u�$��E��4�q��j�p���H%N�r��II5BhJ�wfN5g��f�]�wa6�&O.5!��4�2����j-	��P�Ƽ�i�X�Y_;34����M��l`*E�S��F:2�T6����TJ'�ǣbp�R�*`�֖�"u�N~3��P��	�`��#o�U��2Ԉ�x0DGѬ0:��y���?߉r
ϔ|���QC��<��r��'���
p�x��|�M���3�Z�e%AD4SD_��dU��O�fH5���h}�s�e'���;�2�l������ȥ��aYA� 8;(y�������L�oc����	�k�[�[h�S�EQ w��^A��&A~LU�XH ma���c�
٭}��L����:�6�O�y��T0.|&����h�)�����ۮ�3؃�~]K������)?��a��?f��hF��I�A-ϫp�� nC�1n	��4����98q>��!�>|_�^�����8�ϝ������������GkKmϴ����f�D�BU��NK�+���7D�nX���,J�?�_N1��Xb(�k�WvL�y/z-�V;��pt��]3k`�(Gy�Yx�~3�������pB�~�`���_R.�A��4!U"K<U��x	ǫr����O�1���8;0xF�f�ݲ�n57� V���d�Bb9�1S`� �����x		7� ׎
?�+��썑=�ҭPڦ5��x��i�A��8�sr�(^-z`��q5'y0�X�\�d-6��r�^�N�M��?v
A�ۗ�>�S�./�Ǧ14��b�gZ=����v����t�q��A>�&�/_�-W�ꇤ|���_,[�F@�"b��t�#}��Q�R/��h��fy{�[��J�`�RRH�2��I4�a���Nn%�	�9�ݚܲW�0&��L<��db8��+������p���r�J~���b��6qrHk���ʕ�+0+0%mY�njc*����������7$8����e��R\~PyK��)�{�Ե{�`�U=�f�O�day�ͪ����4���C��;s���ǓQ� 7�Þ�4�����cU�I��V����H�� �&\abiuཐ`�a��lV%�b�-��^����A�	���	tp��R���{�"m�ږY%~��1�1~	��ۙ��>�.sfK�.L�厯��-��FX�l�%$̇�s#�R�B|����N�\Z����ʃ�b�{b�f�2_ֿ�a��u�>/T�*���,apE�R��kؐP� 9Zl�FQ��Ww�v�F�a�)��һ����;L�9�vG<���v�����	;�8�����a㱟��ˣM�x����͗��~5ZMg��9��߹N��~7�z�Yo�����A��������B�מ�	���dܟ��Z0L&��	�ձmd�.G�y\[�nV�ֹ
{3BHd����a����r�|�sN��ҩ�7�b��lj�ދD�xd�fGεn/�t������
d�ԼWj�əC�� iZ�w�{�Ò�1w���Q��B<��C���ޔ�a������{������j��*�wOg��EN�52,Z��hkY����`_^Qa(K��Z�'�{�R�z�h�+.j�n__&n������1! 8����
�)�2'�jmC2;�c�5Ҁ(U[!�y��z��������}gP��cp8�m׌A�9n��M��%J���yp����_�q.6Ҋ�G���`yK9M<�&!i�t8����Z$�Vs��!��c}^����	��s�¤��Zx&CV�N؈��;�yg���3�U�,�8>�W���溘?�Е�K��D)}&��*7W�Υ�nK�C>���HT� z��b#����`3hf����a�	��!����U�ѝ$���>J�ukt"����'H�P4BE
���K���px����ZQK��H�z��Vi�=��io8��c>��7���Z�w�I܏��I#��X���x������WM�ifP�n#�eS�ESP̂7� �A����6�,�W�|w̋��$���-:Ýȋ��F�{ܒ����`�|���\�eB6̏j��@lrtqrtޑ���ϣ�)I
��`�L	8/+��p�@f�ܡ(����s�W�t��Bn����(��`��WA9��-�7`�p�c^�������f8��fUx����F8��9�!~]�ު(���"��~���i5{3x�ȸk`^�Ғ[Xؤո�_
�y�R 50PI��֨	Q�%��/S6���uF>�ܙ��&@Zy�w��X���z��m�q�q'xO�a������5Q�9��{G����[��̒��Stt|4;5'�t:d�bN�A\E�x2�`�,��{�o������j6a��uY��7�-v��JS�N%@/\ӆ��� ��~���J�\B�-���G���%�TvS5��M$�����4�U�b���s-!����TK�хk�K�mKg�'�����k��^!�r�K��k5up�:�7B5.����c���`¿u�}Bc��n�M�|�
M+�xp��'׳�H	hȽ�D�B��t*Ы0tr� �vODl����}�,R�Y�()��vsG�J�:������F�=:b���dk�O��V8tM!���@��������fE��1S�#��W���_w	P?��DUyy��ܮ�9Q�C�	V�MP�;���ƛ;"{ �r��*���� O�kC0k��Jau_h����3�Y`�.�����fv�a�5;��,7�l��Vw{���LX�C��m���#hƏ�������������?�E����黳��3`�?9{~��/��f�����    �������Nݑ���Mґ~�'rr�*��5/x���#���k;�i� uO��)L�#((���r�"�]�(�����پ2fR��p�#��p�E�`48��UD���k��0B�n���|a�D�6�5)�"��JR�bRa���6Q1za���֡�e	kv�/��SE��;���0�i4{{s���dLe5�8�↗�b>� ����O�0O��'��Fta���Œy�r6
�ۣ�
^ۿ>��,.����"�wX�}�B�#AO<���aw�o����6��t��~>G�D��*����x����?W��/܌���d�l�������Oڮ=�{�= ^��H+�X��m�J���8hq����蠾[�yv{�5����˷�]g��{l �R��u��9�r���J2��;[[���B&s���Z+a����j�
�	b�at�Rp���R�`T�?�#���N�����/>XNic�*��K��zS���w��{�Y�i�u���8��4N�\C�%�@o�U2��#�f)��
�K�U�d�[ZE{�w"̅L�h�Y��,H��:�����B�3�#�:7G���n�룑������XZ��䋺fށmA:E���hc�U'c���̺�'��0�DNÞ	��37�b���qK2�
L�+�7�J�b4e:9C��|��Vz��DT���A�f��_w���3�)è0}g�K���RԁM60�Uj���ks=������B%�u�T�GB?vj�G�Esb�6��eM��9��W���V��u��a�o��UeNW��^�m!�(�A-�eg�ko��@�?�ꄯ7�a���mK��ӭ����զ:m���^�b�t�Yg�z`��z	"�w�N4Kē��f1\'+�s����
1b��|�l���oBa�E��=�699G��v6�2U���l H�������2/��2��A*o�쭛\�����+mv�I�������m��L2`! )H��� ���ש7L�����qezg�т�:��2�]�Xk#����C����F�<|��`�ܥ����JQ\�5!�n �ӂ�^;#���;j�Ϗu����x|؋�k1�����\���;~5È������'�'�g��:�9&�q����a,��J���f�8�C�;HD��*��x_�Z����H6
�l��E����:�u-
]f�p4����Y0��+�Cl�E'Oݒ1�¨�� ���2i2�R�ma�il`ɑU��'T�XSe����m��+-+��A����~=8A�<�+d>�L�VG�kB[���)X�b�ak5����z!��qxUkW��A�<�kUo~�#�]V`X���dv.�ѿ1o��m�L�cA��R�����o�ۢ��؛�g��M�MY}�f�|�|~��~��ߘ����zsY�z���f���q�5��G�2��aߛ��W�A}�!�2��m�}�.3�!��K-��v$����.�9�E�V�.���{�����N�u���=�al���.�|r}�����?-���)2v{��G���U5���ԩ-�̰���x���(������c��?�_��̖%������DY��f����Qfҁ&�Dg/M4��?�V�*SE'�g�J {G�bM��?ۏ�J�Ƕ��Q�2�;��2璹@���̳��Y�3�������3U+�U� >���DH
6<Î%eK���3�HCr1��A�U���-3�_B6W���D*)��tD�v�qS,.�܄0���T��j;4<��w�ئ���ǳ�W�g��&�t|h��P]g8�U��u�8����To���u�b��\`�S�m��SX�E�q��>�B�8S�&K���Ua;L���A�3!��2g5�-��Q��1/�a 3�	_��"_$[HP#<f��v� W24��?���Nd�֕��!�C�hͣ��Z��F�,��^��q��D�J2\�k�����QK��-ANAp�[1Q)k	W�ȸ��=׍G����[��X�d�8t��^���k�Qi�$h0�1������q�W/�'=��U�h�
h����#>�Ѵͳ�ˣӓ���b�Uqw���Q�\��=w��l��kOb�@:�N�����M���폺����.��3Á�Tذu��&Yr��\`a%�7YX�m�R3{kЬ�U��xH��-橭7��Z����Q��<Yl��<!n�m�����M��멳�vU)�e���o�8�Z��*�q
��p��8�Ȣ@}�86�c�׉Р@� JxV����:A4�6g��B/����]n}���x���Vէ���Bf-�宙#k�0-}�@KT�[r�m,=��� ����>��շ�ŗ)n��e*ߩZz
l���v����R�(�sZ,��E*�`[���Qu�(�{�V]�����i0��v\��KK
G�sb��\5������Ƅ�����F�e9eL��3� ˦bg��bf'p�7�&�=qi�jUG{��-�JnGүVEܺD߁��T�2q�'�8z_���-LG:��j�)�j�rP����79�'�1����o�7Ӄ*�Xǫ��A��Ru�n2��*L	p6�͵֦����{����;L�"[غ��K؊zG�5{2a�� -,���X�W_np$L��z#Y&ӸJ�#g)�z��+H��V#�r�\>����L�|x�&�<�"�O��u����a�v�X��ތ&�#�7��*]�A;����ƍv��������B��y���cs�T_;V犪�\�S!+}���g��#���A��������MQ��k�0D�$R�d�1n���$�*o�>�a
���U�\���P`C�n&�������a&&m�p���B�"^B2�O��=�`(K#xQ;2J9[c�.Ӝ�!�i�1CG��%�ݑ�i���L�-U�~F"qPK��aZ���Ǻ=�zN��y��P���}�V�b�"�\[�v�\<�����k碳�&cr��]��58N{ݦ��e�I�(�,���Be�x�gz�u?OW%B�M"��N0�C��ְDYt�F�KR�"\>^��C�<����<E�ƻ2OX1�N�91mE	��?�-P�Hɰ�*6S�K9C���%���L�Jg�W�0(�2vV\Ŵ�\C5�~�gaml�$������0� W1�h�:���12/�8v_	����z�����twGu(�����3aܺ|��#�R���Q���h6*G��6/����
�FI.S�t�Ȓ��`N L��{�F2Gp(k�W�#3���y��%�\sR��,�����	|�8)|�y���DgJ�B�����\��R�reW!�}�Zzt��D@5�3�`4nO�	(ut�KٶŇ�州��0���W�c��	��K�e$X�D���Zm��'4^�N�9�펑�Ri��a�T�q&�Ժ���M��h������	4A��4덼�����^�;�����g�L"'_~�|��O墎���wM�{h��7i�fv�p�P����:z���H���t4��d�%������e��I�q�A�%Y��,�̣4ze6��I~T1;�����U�﷣���=p�NUgo+�K���:�
�����I ҆D�%h/a4�7���1�$���%���~��GP��>��)������n�ͼ9�:��m�Ll��@�8L�C��H5qC]�4T������ñ�˴93�S���rKu��~�k<��d<�#��ӏ��^��۷߽�._���8{�M�Uy<{������58�ڮ=����]1[��z��n�q<B��`����Ăw��,�(D'H/%sj��왔�p��l�JQ���q�kiňh��2�Zw�+�ym��$S��8r�O�Zb��B�Bs]��7+T��U�nl.7��m7>ϡ�^��pƆ�:��4�}װ�����١|ך]���>�ʘ�������?��6T�M���Q��x.2��w�H7*�]ɑj�o5ϰt�_�198�j�9�F{��������?G����ȭ!s��7��7�t�q�	�ߣ    3��{F'MFݽ�,/�ߛ���ο��n���5��RK��� T�êYj[%ӡ�/M�"�VX�	�Cj�*h���9�yI��l�T%��ӻ�c�����1w���B*�l`��@�y��(?w��%�l��q�	]WeZ��%�3%�����[�!)���SA�[�'�y�1��1�!��(����_���eF�;�xB.�c��C�iEQ�����FBL��"�0�}���C<m+-�,�ɻ����-�<�ڶ���p������.`�w�P���^6(OZ�b�i���5��U�rkk� 횱��M���3�M'5��I~��m�,�C �����M�����z�q7P�z]��z'��v\�"Z�
ͼ��Lzl�D��'�:=(��Zy��H�O�v�35��ZZ\�s?`��,8�_,�:)@�P���ӵ�Q��l�$߈c��MC�]���$u�� �7kz
_��I��cP���a?b�9{�\��WS������v�;!��<)���j�T zZ�K��^rg�l��fV��~���Ff�3�9��i�x:�=a�q`4����@��d)�e�Rl�q�tѼрq�HqZv¥♫6��C����u'Z��b�h�`��x�bd�S���*�OFQ�qtd�|ÑNުkƪL�7����	��9R�����#�^�H���`/3�dP�$xs���rSy�g�Ѹ׏��U3Sp3�U2�.qK�P�pQ
�d��;x�6��9lѽ�����
�y�/��.,Tu7�a����9�3����Gr8R�0��6*�;���[�s��`,I��Vu��I��_\s�w���k���g�ʰy	�e�.��[UG�D5=��n͘��)`�<�!��+�����x=�=��^��$HB��"���5�Z��5O��J���AK�|��n@�Iښ���]ΘsO5%��ʸ�J���e��uA��r��n�jM{�V���� T@��2c,
ܛ��(!���m�\ݝ��w��r���n���C����[x^t�[-�ś�݂[��ͣ���ؑD�k����XѩS��z���d��9j�M�_���9�z�n��	>�����}Y���^�ȼ�M���}�f��4T��*�L�C�4� _1���6o{�]~Ɠ�j�2o�3�L`��\��`�0z�Nl�L��%X'�E2B����VM��M�A��LP}�=GT�HWsn�-B��?��:���vcY
�ynu��Ŕ�^AA)��Ǭa��_��v��	CA���|Z�B��X�U��z_����mמ���1�d#KS�a?�=w��ƽ�0T���Vɂ [+��q��B����힧+��!��Sg.L��6$�!�}�(QF	<df�`�o�PZv���D�T��������'b?�i��� z�B$-�~1��9؃���0��l�����j8�'�N�k�?U(#�SJ���h��Yä����g�+p���q��A��*�n�zI����Q{�Q�<F\:|�ku����lEX��4pK�HĘ�<���;?F��H�v&��CWi8Y}����e������~8���K��0����X)�x�����ﾹ8���)H+�So���p��t{��H��[8�X������l��8�E{�N��ܣQ�� ������=�1g^�^y�#�<;��U��ćt�I�O:8)��5A��O��J#Y_|�V����#V�w����>�Y�Ж)y�-�V��Iǡ[����Y�&�m�|<@����r�䯳b	[����PGC�0���8�J�7�K̒�eG_��7=썼�C�!��'��d��X��R�GЕ��1�'r2�O��I䤛�ʊc�~%S�%:k�b��ȼ��'�m��ɠa6��� �Wo�Y��\�a=)���r7%E�9)�W!��%�m<�=�,	y~�?r�A_�Y�cES���������T�l����|��Z�W��탧@Z��|���)��tB���C� ߏF���H�!�P]��/����0K�q<P�y6�P�)Zg*��r�?S� �1h����(Q?rm�+�����n�����v��� �;u��g���2�h%,~����������P��rPK���؊����093�J������H
��춢�J����s�"�z��V�/sO�D���sD��}���96+:��[_�%���ߟ@x��`��CpRąY�{`����*Kqܐh�Peب�<�K��Q^��}xX�ć4E�P�:����͔r��5�QdAu�[cXZ������~�u"I���M�-�����t�=!�BYk��`^6JWuZS]����D6J����nZ��X�JB�,�|��(�R�2��ɚb�����3t� ��B���)Pr�hR��j�舢��!Bm����F�V5!��S6�Xrb*���D���%���$8I˭��ˠ�L�t�¾��eolo ���ϢK�Ȑ��D�G;;�"�y�<��Pװ�^��N��o'da���3O�]{�a/��ml���� ����}�P���6n��o���q*F77Ͽ��w7�{7��Y�����!ޥbdn���=gn=�m<��WRw׌֘F�*�����K���$��L�pJ<'3m�^{dPy��FY��5,�4��Xk����r�oc�h�N�o��R���xwL9g_�k�R���t����'�H>�Ԍ��n�DyPYܥ�,v�cD�8\�eq�:���CPF���
CQ4g�ב>uF�~��!�P۬R�".s"��U9�c{,8��y{�r0�e ;bˇ����9a�B�c����α����"���8V�Ѫ���y��E�e��B��E>G�J����
�/*ݿ��Fl�*�'ȥ�\����yG�BD,4�*gk���9j���0 ��/-�|�������uF��I�@��N�����f��h)GCQ�L�*�yOT��((i�� �����q^n�Y~�T8�5�[�5g�Ō�`�1��k�ȏ�^n�������K�� )��,�����`�L�?�%��v����N�(��W8V�#Z��vX��_)(+�O�-Y8�F:c��c�=&b���_�uv�cY�hw������	-PB-!�]ʋs޳ VMV��:���6� az_
�u�9��Ⱥ,�C.�B����XH8-^�Y��c�P�fC�
p/D|֩�&�'�nK#� A�Ĳ�����a�CE���O7���_u�YrSNu:q�Q1����Oa��s�]�)�w���P9�@����r)�A��,F��*��0���|^�$��Yf���?���C-Tտ��V�.�$'ʹ�$f�' �E��Jdu�N
�s�%X���6L�fM�gQ�؋�;r� 4���Q��ӛla��y����ǫ�R����u�Y苌ۋ�9cnv�W��:�#}��&����6�|������W_��懧�O�z��^�]��\����a�(�5c��{G�.�p���2����y�ɩ���9��u�zX�V�40dw-��t2��pЛ��>��T�Q0ĺ��s	5{�I��x���?gt<#��|#�?���%`�B$Pas��o�!Ke">�p���df"@6M|�*����?#�"��鲊� 6�o(�Z��ɐ#͟�`B�����i�$C��R��t/���!݇�YR��>^�W���.�eU��h�v����H�������/n֥M��wT�[��d����tJ|a��n0%CE9|J���Մ�e�S+m|�*]:ͦ������w�����d�iw �7v�f���E[$�ԗIA�K�!h� v3!d%�t����^Ǐ-Y�17��A�
����֮tx
����7m�fv�d��M�婟x�6:r��J� ~r���l�)L�rw;Ƶ6�؉^%�2�-+�u섽	W�����^^�;h!J����-����A͂��]q��W���XQ��rz#[{0� �B���Lp��*���Mg����N�`�s�ƻ�0�����v�Yəcs�_	Mw�̊q��    .�d)�U}F��ch��Y8���	��� |	���pB�g��׉��[o�R�	�EI��]�G���C�[�P,U|��[	Ҟسq�Ϋ���� �r���lf�;��(dT�SU-w�����n���I�f�`k�H�>���|�]�֦9WK��o��5^���ZMW�^;��]I��#ܡ������/�Gd.ôC+��qU3����4���G{A_�_|���ދb<��}�Cu����w����=�b���V�{��ԟ�!��,:�������L7���x��R��x�k0:�g���`��g9q���5��BCgT�� �LU^��
�"���]��bm�ǰ�?�9�WI�ZMV9���ԩe��׆+���]�-^��θ䉗�t�y�l�N���;�- w`�(�����V>�@�9�g�w�9`�?��x(�Е,����#Ԛ�K'�arɈ#yCnq��`Gy�6]�U��&uy���;~A�c���Lr �"!�.)��x��������nhnN4o����{p��I�<��y�yKW�y�v����,���b�g�g7>�ڮ=��n����w�׊i0�G����4�mɌH��]���$8�m�ɑ<�6y|1��z����Fݦ���C��Ls��C�d#O]�9���0�
1akK��Hy���m�ip�Y�б�J f�\Z��LRuZz�l7'Xt���}��&�l�ޥ*��\e��r@u����+f�i�:m�7n����仲�rew-ٽ���Ah�:��!�JdL8f!��pC���FU���{͌��������BH��r��p�aot��#^3Ʊ'�B\h�M�XLr�QU�4�޼�\\e�����%*돍��EOz�ސ,R��<B��8T�@���nc��c$�$C�$4ڼ�܎1�Y��'���ia&��,��O�Z��A�7��D����y�� 5g��"x�e�bj�,P�1��2���% ɚ��rh�`#xx�]��"BUF}	z����	�y�拗�B(�|�~I���sv��YAo&.ؤ�;��T��.�li~�_�k�B�5K��<�����N��$�~ ��}��	A+a����cU�惇�,�q�?�Ϩ���	�����(L�x��@��qx_�i��!��ap��3��l����|�̿���8��'�Q���tԿiC�Ȝ+o���	���呀�8Y��
�i
�-pw8��@�V�62�#z�"�;�r!���+���҂Frb�1�� p���{ �[�v �w�2d#IsQH�tz��a����uhO�/��F	cr�]?���vB.�i�����Єo�Npn-�/0��J��EFX�IbỲ�ΧD!뿶�c��T*.����L/�~dw~�J���_���k��X��MA��|�cm3�~�ym0yқL-:zE,���}���x:j���)�ַy�-LT��H�4����A��l��5���E>�Hj�����U�8��g�NP���-��۴ o��j��V��� �6Ra��f�6�/���y��U#5��D�W�d��H40��QZ ��7�Hq�_R91�����ĕC*2]P��C7%�!��z��
4j�`Bf�ɩ�<��k���y{��?��=�fȒ7�O��eZ}��6�G8���ӗ���4�zq�Z������.����&�XN���@��ca����>�S�\�%����=(�z�=��A�y8�n�^�-�14b�&^C��ܾ�[ lR��vH�-��
"�,�#7����R;z�B�GG
a-D�Z0_M��\ \�8���y�6�bN��U�~����f������/��F[w��,a0��v�B�E��"j���%�)������nD��HԌ;�V����;�
rT�JX�%�>yy��>|>դ�MÍ�f4�����(����F�Qmm���`�����H�XBˌ���W����y�(����[$L,��qs�݇�>�v�����.[��1���lui���ؚ��'������8V��ѭ������tلX-3h~�f��`�x9�bl��q��Y�)��<J A�:ן0������0�@�9�"��}
Z@'Cv��e^^��Jr���O�/���9i���7��HI/����C�¸g.QD�*�w���I�,#ظ�SS�K~'����y="+Hk�+�J���I�IC1b�Hw�lk�Ѝ	^c\���0���UR>LP�0��Q`�_JY ��6�:���x��x�¯���΅v���1�s�F�(�$�'^4NY3ڵ&j,T�(��� �!%�R7r$.T� ��' ǌM]���*C�}Nc�F�
^���k��(���T�Q밢}�ٖ�w<�T"O�d������l^\�t��5a��`��q�M82��87��x8O��nw:�v�v317��Ί�ٜ�qևQrp�}U�D�	���O�a�:=�z.$�h>�N��^��bNZ��	6k�ݥX����ȱ_��]e�o^#�c����+��uu,�6�x�H��M0�ƻm}���J���P�u�AQ
�xǱ�L�EaJ�-+l�)�܏R���?=�v�B�?�@.�g��N��l��!X�Rjy7zjf2�|�-ZU<��Ec�#���w�+�I�y�:7q�����v�I�;�{9;���~A�i?�%��a�b�/R�����^�{¶�*<�R�<\E[kġ]��̅��k0|���h|&��
���fwp--�ɵ�S��UZ�9��_L��"(lndEFܶ��Ca̓�J��J�tZa�4��m��{g���[�� �E���$d[F �F �����.f�.o��Y'zU��zt�����l~m>g�cV��z�j}�Z��M�ͫ�*��8p���@�� �����w���Z�D�]R�:OsotvlZ�ǒ�m�5�Gw	�����M	4��M9�\.�U����҇w���M��|����wŷ�x��.w8���g�lt��h8Fv�x�w�+f	�+lx� 4�}��`8	H6ݸ�u	�4`�oȝ�P�˨�OZ�.��5�87=W�L��;g�H@c<*�*s�c�&�o/E�NrG�nJ?���!��@� �a��|�ZADb�^b���$Y��$�"DژRRj�mW�\.BjD��*( ���Y�5Ih�i�8+���}+�j��/tN��z$3�ђ]h��E*�Z9Ւ6��1n6֞�G�D�G�S�󀩝�5�ܮH�ظ���8�*�#��1n#m�m���)�C�*��(�~.����������H5��3s�p�
��/���':�lܯf���O���H�YF�s�4���ʦp�vc'�]{��������M��]�NY<IN�ɸ;Le���d��� �(�m%h]�DVp�T��L
�S��L��W�p�%&
L�U݆�>]]r2�,������q��6f�{��@��:y�ߛ"=!6�S�0�C���.֐1���C�& %�(R^`�D�ԏ�X�mt��+���5��q*e��!iG����Kx����ψf��5*m�:�	E�����De��AO�D�\8m�`�>�2���N�z7���>[%g��_G;�����Ee����| ����E�cn��~q�Ζ5g�GM�&�(	�Բ�;���춂�p��Gq��0��bW����������W�o`��ci��H�n���b�����ӿ~�\z4[��`2��q�ޤK�q��S"�XHC�t�x�=�_�{:�1%l�Cr�G���]>��Sn�q��a�p��b�Ø�Y6�{'���>��F-��m�Q����\��ft�[�o�af�ƺ\g�	�a���ʂ`M�|�rR6�&_�)� O��ʃ�,z��]������HS��y���!�w7p�'G\�� ��ͥ����g��r]��q������s��)�{��*pj���2G�r�5jl(��)1�V�ӎ��k6�`��8��	��[�Y���B�=k�j.X~ˍ���?�9��/D�|s����O-��:[a�d�Т    P��#V��K��I�˧��=mg�t�S�6�S�s!�,�9�:v��^���oO�^�{s�+�?���ƹ7�x�6�O�zs[;��� ��L�ҝz��w؟�4E<���������fGǧJ��+�<��כ��a��KC�4��I74w�����̔
G�U��k�;�����'ѯ��_Qa�e���F�?�W"��s	�qhU�5ɻ��.d.nY�Kv��;`��%mnb�bL 8;N�01������Lm����`P��2�yN�e�J�/|8(&�~�؄�ʫ)˞���������gyW�mho��s)�I�<綞�����g���9�|��\0�^O�߯d�����T[�n�	�r���98)���5���݃v�h{2!��V�����������g�/?x0n�[��al���kf���Ty���{Y1Jo(��h0�apԋ)�l184��:��Ħ���<:!��?S��R���L0t+���#���t�-�0O
�	%�^���q�)!�g�4�wL���=��|�K��]R���NR���?��9���@���]@L}��I�fU�Ar�W����mE�f��yp0$ϩ����-כ�KF��gU7�ZF��R�I����]�Xl�9�^�-ߞZs`��%�L�>�6�_���9�{˫k��@6��x	��=z�@��6�2�N����VS���;�ދ�ޑr���yN>��]9�g&$��k����q��֗��ʺ��V<"5�N�}Y��:՛]2\��R����:�&��|���MQ6���~�3�#sט�v���/�^oȷ?�]���6�KV�B���lF���7ʁ\p����K����p������Q�k��f[!���)������%u�a�G�,V�,�������m.�	;\ȹ䁬,*
�e�-���(��G�:�=��@��Uz�K���
s��$?�&�`2!�A[0����"��_�=����a� �a�Z�H��*��69�)�!%�h�}�Zt��
�R"��<E��aj��v����]���'��v��N����Y|c���<�j1��)b����G�L���c U�� ����0w'��pM�DlW����P�gn*�5��R���T�P���mB8�����E�-[k�lf�j�F�tGT	v��-*�' .
��P9��Zz�ȍ����,1oU�i�<ߌ7��|�?}*%�c:�t0:GѤ�D&\p�$��
���٦B����]]nr��G�:$.�5��p��4�;�Q�����P���Kё��^,�C훣��v?+�?e�"�C<>�Nڮ=�ǃ�YZ�W�Ӥ�>]{ٸɸ�$Ⓛ���Ru����RW�)�M)*�0.�Z�"�-G�F;	�sl�8�����(�`i��m�>�qj�����r��"W�b��2|�ٴ�F�o�hqR���WmToœi�q���=�V҃��ШZ �Z^��q��$|S�]����ua���i�v��j"������蛘��K��?3&G�Z����:UTR������^s��Q�S��~D$Q�r��^_٦�������j5c�~���||��p�e�ע]�������;P8ƶ�8�O�����a0-�u��}��P�f��W�{؈1P��fێ��S�m�{���G�'V����7�`07�?EՊ+9ea��(M:B8����Ud�ph���w��.<Q����-#n%�CMC�1G3.���-��,������b������H�>B_�.� 4�|���aB�[�DdB�EP�̔|��J�-�L��~x��� z��YR����27����C���6��Z��^Ξs�*l��g�7J20�QP�.� ����p�v'$(��,�Ƽ�ӫ�<)��x3-�d|؟�$v��O�����'o��0M4?���8(�u����h��C}�3��Vk�{m�hL�V�ڸ-lN��Q�V<>�6�nm����l=�����F���֞dpY{a��t�T>aΈ��.}Ld��{�Ϝ�`��A1S|gka�/��=ԭ�ی�i�wl���>#�\���2
'�"U���|H:A��O����u=�b�U@� ��s�x�u�l'����-/���ԔC���?���ĩy m�k����5<�0��,�J��{غ���t��{`7�t�A�{�v�ܛ�����F8��q�^{��9Oi&[[���0���hj�v�؈��i=�e�U
��>�="�|����ƕѾ��d9�;4��$��A�����!zz�vPP��Bb0�4�ǍÜ/��?�i��r�pՆ6T�av�%T|�o̿�� E��y�ϴ�	����^�� Ƙ^N�F@Ws��(3:Ӭ�P��e�u�Um�Z����3vT�>ȹ,FT�D��{s04 1�������<A�ei��x�v'��p<�ƽ�� F�Ixm�������!E�<k�'�6��,�q
��h�?y;��S�q8����$db�|�e�9a��#D1"�nH�9R�e�1�2@��E*�~bG����.�%Q��(�T�\\��\�)�OB�J1�x�0��gsN�p�Y:�\���C��Y�B�hN	����*�m���fO(]�n9�
j%�X�L��"ȃ���3�D9��;���:=W��j���D@5<��F���"i0[�_[��^���+������T���7\N>|���Q=��_|�nV����"F���pꚱ�Ъ ��Ej25C�e�J!q^(>~l6(�/75�ﺶ��x4������N"��r�|�L�V	�к+�<�H�f)	��[��,居S��߹�o-c{Ǒ�pY����/���M��J��)lǹ:K*Լ9}B�ju�e+7�B����#`�DY����f�Cu[�l�� ��@j0I�������bn$□��ø�1گ��x�/�_aAUq��`\�$Êv�r:
���8%��(HX���cg�x[�����:��[�e_kõ=SBM��2�\kg�Q���*��(?h�w���d1_��qT��V�ˋTn�4���w��ʃ��k�53�I�c5Nm�N��!�Mo���0fW��?�	�����$Z ���������ׯ�����O}��H���[��6�����YN�\��Ӟ�JqF ;�� �y�2tD\�4,W��t�d�'��$ȩS[Z4���F8��/�̱Q��LN[#q<��-�Dh�`�Y`���D=\J����O/ʌ�̦y,���7�:�6_�5T��[	�~L�aZ̬ 3��R^vΐ��h�c�S�6�[:uq(�ϖ��,a<"�.����˚ɝ9���1J��A��1�����=�������ϒ����Q��j|�r�%����f��x?���!$��m׌��� ����Gz�tJ����8@cN���hYfKP2�,��i�]����:-��*�=H�HX� �6's�\b�-#�cR&�|���Y���f��a������XE��d(���}W�)���B5X� Y��H?mU�I��N��}��
LM�M��#vLV�g�5�%dՓ���4���+yX�e���O	���B�VE�A4�=�͚��e�#[���jgP��g�-�����1��ߦ�'q�l�kʊcc�?I. q?_o�ջt�f����%�;�Q�?�v'��(~�\���n��1�i ��fv�xo�p�2Hk��[,�y���a? bN!3���)n�)�VA`X4ϗ���.�3c�4Q��0	D�2�	ì`��}5\ʄ�E�� Wa�^r���G`���7���c]�<4��Ҧ��eg�����,_�ixN�j����/�-�h�4�}8F#L8��QMD}csG��u�T$�+��k8bВ25y��?ᩏ�!��]��Y�q���*�L�6�k� C4���v�������Pvy��Ts�Ǖ����<����۴����ŷ/g��wq\هx�m">�.Ku�l���u������4w��4�f�N���چC�KU[;R�+��Nu݅�S	�R�l    �5qR��+�0��@�	�7����_M�Va)[;�(HI1r����:���<�A�;���H@�o�`�a�X��Ý������]�W	���3;������;�Z��rS���hɊ��)�K}�����[�_�^�c�?����`%Ž����Y]ӽ#x�u����vi�q����C*ޝ��M�8�$��_mI�4�'=z
_xb!	ֲ8�)�k��^5F��&{w:��}Қ@�1�
N��s����~&u)�N��΅[���n{e�0�f3�$^��vкp�`i��J��Zfɂ��li���O0;atA(�_�n>36�)����L	y[nI�z�3fEnhAB�� :Ϡdg�j���.�K��$2x��YΕ������^�g�fHˁ �
�	�t)�B!��b�����d 
����Yܻ��,��aoܟLƃɠ���%����p�v�I<�����M������ȸO~�������!���YI+5�E\�U��5�2��j�',�@�r먐g�,
��UO���	�0���1c�\�m�"Q���j�c�.il;���I���?$r �k/St���*�]5�ly���G<1��D�'�PY����"�$���=��m�rlvx��ۛ�ˡ��>\��蛵�v�,����[Q��n���놽��^���޾�����ut|�>;�x������Og$?����C�PM᮴ȓ]M�5��Ds�k�լ�l�����@�\�7Kۺ�g~%�ɂ��`��|��N:�����{u���{'p@�tK��qZ�N�g��tl��J�R�X�a
��Co�kݚS�?I� ���@h*����)T��I�Fe|k�]�{R�e�£�%�뵇�]�?m��z���K	�ϱ�ȭӁ�i��CS$z*��s����8��ЃP#��Z&�ӀNl=�&Dr�bU�=�D�B�V'6.&�-?�]��+[%��Н;~���#�Z�dþtB+s�eU�z9X���<�\�Ra��,���S��bU*�Dw��Ɇ��|�h�T��8)�50$�e����Z�+c�cI)d����p����l�_:N y���~�[D�u}�Z?���p�=��m׌�Q�e���7�;�A���3�q-]���p
��k�H�a��ݹ6�o��7�2e�Yj�?�wn���8UL�)Ux��xX\q�Jq�#��Ain"k����4:�}�9�**&�2� ՃHE�wk���"�̖��݊�NW%g�ς{��o��_+��E������N��������77�a�-a����~���e�k*m��c����l�U�6��C�UT0Kj�c��S�@Jj��u�ca�B�f�;*�Q�����x�����ݡ�kOz{g���7������xм����yfL�9����9x��=�D&	�K��jp�V"�j1�{�%�b:�D����`Pu�$���Pzg��EMr�E�>t�<x��Q�����#Pu�)/hH�&�����l���������~0[�$w����=Ԋ'�$���� �;�mz��Q**K<�-\�`���;8_Ê��v�䶒���B�4/gj��F�թk�UB�X��K�)a �t>�[C�Zϕ+w�M:��<�A>O�ςl7{��$%��.˜[�-uT��W�4�iK��Z#�)z��L�9�����0�D@D�B�6��4��2<�,�`ܩ\x�����Ewк��o����� ��fo����?�P/��M�Z�mޝ�����"��U�_�֣��շ����n~������������?2��>�ھ�n�����O��o����ߵ.����b�>��FQp�[�ƴM�A�5��{�q����zҼ0�{�x�R;���pD�h'Dt�!�Y.s��!۟'r�)��]ݥ�1�jBa�>�*e�N��"[��[�07��y������'��H��!V)�*�J.��+U%�XvԊ�8:�i����Рp-����I!�!f�@�*��Sy6�ހH�}.�!.>���	�`@� m���y���Y�}fgTe�b������@�d@שs��%r2�gUH���i��b�/�%#�͏�y5a�9��U2��>�f�K,30������o^c����e�<xHA����w��G������7#8DC�)���}3��mr���� �H���O�_7���rhX�<�7�!E��ml�1ڵȸF���@��p�SVz���v~�48��ٳ�^�9%�c��@:
4�^�<��b�F��ۑ�t:
�u��#�î��py#3JB9��
0��KM�l-�m& �qF8�`�Q�8�,���`4a� y9Os�ڜ��~[�V��L�����Ot�/��a��?6���ݦ�0��"U��8�����Et2�:��5�T:����н������k�q!U�%�H,��C�/(\&�/}e�*Ob�<��U}M�Y�9�v���8uQ+�@�Q˶�?̺�ecGБ���t����-t��w^Y����t�=|&��&�f%�x�c �@���o}�`��������A�/�X����������z����t����j�=���d]'�'���b���3a(m68x�!�m��d��3�'qy�n(��Κ�,�p����'��������|�9~{:;z������<��Ⰽ��Q(=:��Ci
N�&�-�d��55�BU�,�&���o�W���!*�kJy��+L΂� �*�� �4>��ȟ¼.$�PQ�dA��r�݉�0�~��a?�UV��S6^��5��v��VwL��+�$M���
r�{��>�rI����U�V�0`Z�5J$�:�F�phUK��}�T�y�M"�6��r�C�z2��_���CD����gQ` ��@�v�v�Uk3�la��h���1E&��aw�vͬ������ږ�hl�(�p���y	O
,�j�V-fNҀ��#���a͝�(<�E�WI�
��"�;G���+�3����om`�rD��fY�Դ�t3�S�Bl�-��|����!jJJ�tTNv�,6U���h[J�1� A#t\���F�O������IEBN��:;�BA��U��tZ��ܐ�����,�Oj5���
�VL&���@%)�x:���p �8O���:L8�sn;�R�7~�u��;7iqQe�_l��\�X��n�7��1'���~�@_ڇo훯=R�P?����u�s7�̄�ٰ��U �X��s�	���ә��p؏��gj6�����[�L.�@l�
ĸ��@�������g$��q"�Eg��c���ܲ�i4��a�&���%*4��u�d�0H��>�hIp�a4;yى�Cv'zY�s��vX���/�:��W�PE�h_ٍ�]f�̞��-�"�Ga3�n<S���r>(Z8.&,x'{�r��QC�S�۱�H��T!�h?r8�U!bW})�g��(~B� �O�#u-a��b���7�`����4�DF�B�06���DؑSܑökf��N���%g��Ur�Ҕ���"�fPҿ�Y�"�BO[�i�\�Uf7�e�by7�u4�$��Z�(ǣ�`:i0�L[����]�����b'�{)��m��^E��D�������,/�H�هq��6j�B���;E9G�f�h���r�¦�������xE�[��dA'-��7WyѴX�i�d'���������, �6��������w ��mgNbeNl�C%{�Ȇ)�(Jc��il�l24���f��.P�� n� %.�L�Ql,�nįgU��$���P'�d�J�n�ٻ�i���f��p����	�j�P�̐�(��?���0����#�1\=3?�4K��c�YG�Q���ǽnO���f�S�t	�1�@�z{��%d�Lj�ɑ��<҄|YN(��ѽ�:��|I��lJHnv�f��������������4r�
]��01�w	��D���)	 ����̑&�f�q�H�����9kbpim��Q�O5��~Rn	A�����M�����7G�^c�� J�� 8	  ���s��I�8��w:~g��$x`�G�J7�)4*���d�� JN�S�w��?r�&&��]3p�J��إ�T������y�I}}��A�h:
�ǽ�xH�cR��Z��0��(�I���F�O՘�~ .����:�<�(l1�B�ݠH>���FG>�;��ȹ,���7߈�YLHK�q{�#("��Č�
�g��� <�0�Co]Z���H1�Tz���'4b@򼺵t�"Y������f���{`=Rv	�-
�f<`+|�f��i�A��B��u=��c����kf�����.f�:�f��f�#��h���d8	̧�x0@&���:Ys�s�7���z�H֒�R�X���7�W � �_ڣ,'��}/F�z��	�g�vzM�DLc�ɣ�]�R��E=-���V�..��� k�^�✺��<�ú��t��>�f!ᰫ
!i�ױ]zE-i��g���ߥ��IEr
qdb�	$9�h�04���B/����έ%T��WR����ɷB{�iG�
�>�1H�����k���a>M�ʂA���qN<jD�/�a�Z dg;���G���>d�3^nD���T���"����ؗ�f�$���(+�qy��'9��]SjZ��E��������s�NX����1�jp���>�W��{<�ŏ��g����Ak�z؏�>u�ذ���)�k%��h�=3)�hvNc�ƣ��70�.�52�Җ	�CL,�e�8����X"2������V�h]
����EZ	n��Ak����Sw\�D�M�_����F/��qJ>��P��y��s[������n���FYcgi"hÛ��JzGmE�n��fA�~b�X|�3\�U�TS�pm1xX��9���S��]7C$|���Q-`��?ц�����5��{��yg�W�Кo�e��Q ;��^,�l�L99co��5?T)���,�C�P�oI�p��nX��r�p�P�`	e�����T5C�R�2KV�]
`��ل^Qx~\g�~d<�?1�,�iÇ�N�%�bB���1R�h�7�D���XY)=��2v �&�v{lc�����Y���0_W�ݮ��w����y���y�{t�K������R���$w�����>���~�3.6��N�(r8�c� �F f�@���z�-a����N�� R'7�J�0�,��4�`��7�[$�u�!��fV;0�\F@'f- `<��Tr�K��^�{^�]����]�bK>]���iV��1�Ǐ���x�={�i�5��{{G�z{�G�f��>�s���pBp�U��X�q�у�d{����f�Gq�v�������@n�
x�/S�>.�+��Y���*3�)6��%V���������g�4{�����,}:Dݭ�P&\���Q��t"a�>TF6Y�lt{$��
m"a� _��W�տ��r��8�1��B�.��fQ)2B�����X�a�J�z (�{�l>��M��f�� S��� ���=Ӱ����}�?�!L�V��%:�T0�y�i������7w�_���9���x����2Þ�V׌������27+}�`�MC����E�b�T���L3�^\1nKM���6����*��t��f!����0��XkS?t�~�T������B����S5 d5A�4��i*�.6bp�]s��=**�sn>w�^&����{�˧Oܺ@Mg���U�ŉKp��r�e�P��ROr��y%5��	ilp­����ۮ?2��b��������<>�Bc�׌1��||����b8��yL�^�1 4D�!�mN�zrjI��=�p����o�F�[r���uz�p$�J>�͸�FG�2lT�i���B'��h�'R.92Kz����0���Z�pk|lJ���w�S��dU�$m�t��x��m�e�ǅ�zx��*��<���v=�|�%��;�j���3׶����M���������f}6J�����ŕ��,��~)Q
�]3y�w���8:������,�����k���,��p�W��x$I%����g��@[��s�f�z��c��8��X�,���� *ʼ����� x�"nu���2��zھ��o��7�4�ST?� h-y���g_}ѱ/�ĄcP�f'��S�|�"-�����Y�oX���q�a8���- gG-�#�0�T��~yo�;&���I5��7��6�W }���<:�N�|��ͯ?�����Tg�{j�HP��A�ŀ
�"�Ӈr�'��clݘ�����
�(oj�2���P����W��1uţ�Z|�>���<y��%X��      �   `  x�UX[�m�
���c�K�D���?���%Y�Q�UH������?>��9����Q�[5�eo��� ����0ǌ�0�B=z��yz~�X��.�4�G��9E�=g�'/��������9Nowlŉx"~�����'�����'��3��;E���=�-�O9K�E�����XK~�9nsK��k�y�1�o���z�eOA��OAy��<Y��XTa�S�P��b���{!q�M�Hq�#�.<%y�����W�ǂ�����o�<޵���T  ^b�������~|͎{وjWW��,Sy��$rԿˠ��`Y���سՑq�wm8t	��_�Ж�ξm# �Ń��Xz`��w�����)
���!�p��#>��ww��s5�����@*�-��vıa�]x
���@J� ,��@��xF t��H]���z��@:>KI�`H��w�!)}cR��QQ �`�JP�|/ˏ���/��0�w�K]�#ཕ�@%�ߊ�6 ֦� /�=������P�o ��i�(��a�@�����$Ihak�'�GnO����7�y�tN+���v�^@��>�t��[@���P�*�������\7 }��-�����ԫO�h��lLOIP�J��Y	ǳs��P9;0	�:���|�C��» w�ʉP�fZ&}'����k/Ȥ�_;�U@nloB7�s���>�~�;��l Bf<�\@�'.��eơ=��ER�o$?a5���zF	=�NA8\���w���bKz�L�+=��nW��y��n�����C,��c	����j ��(�%>d���h�W�I��!�Ɍ-d��I��"<�����2�㦖2c���-�mK��r�%���#��2w���YK�����4Q�[��%XBf�r�qY���;�T���:Mهf
�%�I5�q%U����B�-%:��:2X�$�XaS��Ζ��59�.�ph<�14�I�!i̢jE��H&_jFrBP3�H��K:ַn�}�v�.e�ت\�ņ�
;�� x2�J��	��� �Q�	AW�	R;R�X��l��$���3Q�W6bs_�^�vM R*;in��G+wq�5�Y�Y�Z(9����tB!�>�c�#�<�i��	���D���b�g%�$Jd�H�,�Ԛ^"��I>e�P%~wNu�2[O��s-ib�Z,��;6o�܂s������<>��e$�:'�%O-�oh<�dx��R�l�8@�X��-qϨ{��@!+oMk��\I(�a��Q�~8 Bn����� H,��&��/-�A$(���_�jK'��2)3"��)2;m?7��d����=�C��Ї���Vwl��}P��y@�&eG�L�?%��J���I=J�'O�$�u�J�֌$�K�ݮܿ#��t�r4����ʭ��� )m|���W���:�p禑�D�]g���><�֒bg82<l�O��!z"�5DӇ�$%98Hꁜ~*LZ�D��aJ�Ysv�"e�T@�eϝ��[A�2EN�dV��CX駇h������z�c�,ű���Kt�>�Q�.��QB�mqr8z''NZ���S���ѲP��m`Aׅ͏6�a�����E�������P~৘NZ�ku���?��H��1      �     x�]Z�,9
��ḡ.@rb,���L��ڈ�h�t".��o�������?��7����-�6�����c�������o �Kt~i/5H����ے��%�;Qw����ې���R{����ho�Dq�A�6��컕�@������p��#��a[�͸ݶ���la;>w�g��|c����Q��1I��E�KX6�>?��]���g�X{��c��]ݯg$�ҧEN���\r}<���a��Ų�3�[��ᐾpF}/�g�W*�l�j���C���@�ߜ8�V��s��Mv�Iiyk N�HO�F1� &���:�tb�I`\�[�z�	��!%ޅ�º��� �0�x+ia	�����s.���7S��g7w)�uNT� 㮦 FY�����D�g<,=��'e$f<L����s�Ϧ�/����:A�v���e谺��+64��\v4<�S زva���.�a"�m��+�P:F$Pc`�a:�:	��4��h%�8�����N�]��`��q�ȥp����8
�/Y�Eq�U��2�e�H�f����X����H�|����6B�yFV�
�Y	�D�
�v��p���">�9�s䮯7�XOz��}ڌ�6X2L�4����
�d~:aɰ��&D�`��>m΃T�el�6�^;$�-�b/{�N��^t��qDc;���B�񸧋�1�G��Dޣ�Ѓ)�J0őB����I^�	IY~�>E�6d|��ٴ�[�2�$��z^�7��u{����A����r������-K@pr���h׭�ԡ��i�߾���w2�(����K����{9>���	�qlq�Ř	��G�F��� ��G�T͝��~p��Z�J@K[;�;ҲΦ ��X���Ǧ�v��[{��4�9D��a���q4Q��A�,�Q�䤈I���v������)�

�8��a�:��F��\&$\@�%��+7A5��Į04�1(A/�8��]5��+�
��]1Q@�wiC���M���zi8/	R�k�Z���A�W&*�㶄�?�Gx�(x�^Cj�hwS��x��!|9
��{�?�sb��rpf.+���\	 f^3m���ކ�pq�>Ňt�$ogl�+��`��nm讋�ݼЉ�ݼ��
f`n��������F(&�٦I2��Iޯ�V�A���v�\l<+x����n:M����jɥ���}�і��ϐ�e�b% -8hh���j2?l2*��ZwЅ�VN�'P��j�LK,So	T��(�C�`rw�+�5Ġ�*�Q���x=�2���rW�2�r�X�UIe,(x�u�>���P�o]�b' -�T��V���D��O�y�fTv+54ƍV�k4Vgk�M���Y%0�^�*�1�=s`%-��%0�3���V�L�����I��y������	k��	g����p�ea�X�5٥=�XFƙ�Xq%ə�q�Gr�s�G��ߗH�3���4 ��$}w䌾�ܻ�!Ȓ%2�e����X���-�-��%J��٦l�1�D�Θmʖ����p��,-q��s���t���������']���!߹�Rvg2f֑�lI_��L�U(�s$-��%������ wR2(�~/IKvw*U���D�硏��H�n�.f��q
�
p�� W�`�^���u9�t�~3DNS��*DB���*H����g�LzD�eۨ"���Ft�%��D��i?�.KE�� ��D�=�0�.�D��%UD�F�G���L4g`<��s1�+]åW�wI�?2�'-#b�^Zo�Vf�.}��P��@-�#�[���\��J�"�i������'K-q�:`Tw��$}wIqqBTWᢊ�x���lQC4�d�W�Dq�25ī�a%�e�vI�ʬ%]SP�ԟu���u�+v3:4��.�%�2zU�:�(�t���3��*��]�ݖy<q;F��jc���6lܑ�XF�����UGx�ޤ�N����+�Q\U�guA2�����Ғ;� ���@Z�-#�����`b�,�k�3�����.6<Ӭ&��$}]q�G���@%��<$�O�cq�-�)�K��k�x�W�qJ����fH�
��+��4�%lN�w�`���^�l���g&�� �t�ֽ��b[��ݔ (o�bM��k����k����k��е����6	�2�e����H9���������ILŸ�I�홆�˸��`I�[w��$O�y�:��XM�)9��j������VL��Sx�#�Á��wu�|���U;X~��d0�W�(X*O�]�ds�O�T�:�d�Kd��[��%^n%��֒�� Y���Ӥw�
5���I�2�޻?h�t��\��`ZD=��o:s�v��Ab�`�!y��҄p�����K(@,��~O�;d�`�DSі`* �K�KeD��l4\�%��X�늹!���7DV�ކB���`����W;��H�\���o�kŨnֻ���-q$��I�l�F$��ˌ����u�ъ��$��\��B˥Y(�����$��Ɛ"�6f[�� ���X�&��&\a�T^!�AB2$%��Y������K��Iq#/�Ra�ྞ��W�!���:EцV5�5�bϡ��8��]F�p��D�0hV�p�yT��T��!�؇� ��O�	�:�*�lG�d�qʍ��9Ԟv�GǉO'�NDU�;)���FE�q0@@#X��b�P4�831Օ��ey{��4�AX��w?LM6}��,������Ǵi�Ol�I턩�)~�3�3��G˵I�J�
H�����	ȫV���XD���dh9��՝���a�ˈZ�Θ|j��{�j*+�,j������a�ܮk�ͮʣ�J���)�b�u��}xi���zv=3��U
D���ai��n(�Z=4f������h��#M�����oz���J@䃵��)��M���)I��.5��*^�$C��8	�X��l�� 53�("�=�s���)O� ��
_#����U�pS+ʝ�=5���N*�zF����L�v��,��β��ݲ:j"+�x��H@��� �:���U������).�H�
 sM[�tX{�����f'"��`���p��-F�b& �~<�[2ǃ5y78�P٦QK�j%0�,l�Я��;�c�)RHC83�T��E���G�6���d\K@�#4�G���d�vn�LJ_���_q�>M䱸F@��j��/��\�N3Y?]���}���!}��bN���<�����x����V�� ���0d���|��� ��h����R�>|�Ҧ��S�jv��mi��@���]=��g~�=�Z~T��|G4���ot�_Gᳯ��"�N�&D��+��a�&�2	����}�E$�>��1��ע|z�ϧ�������K��^�M���V�A���"U�x�*pҫ��΢S�Kb����ħe�:�R���j��z��/:UM�%~]<nߟav"�>zͤYR�����i(�cg��F.���ԇ�C���'jeH�Y�O�� �f=H=x���1A��fd��]������\��      �   �   x�3�t-.IT���L�L,�,KT(H-*I�KMNUHT(�KT�/JO�ˬJL�<�9���9�?�����?�����߯���/$�id`d�kh�k`�``ie
D�X�b���0lM-Z$�JS���2)�e�)��9������� =A      �   O	  x�MYۭ%)���
0ؐ�F��ǱU�i�����Q~�x�3��߿��g ���Ib����㿿��u$H|G6��#��#z��GuR���� �1��Y��"��ԝ�'URy�&�?��.�L�����>�����'��b���H�9'��� �LmM���ȉ��f�A2��]�3Tju�\�c�֏�9��-��E:/_���<f���c�3qJ_��O�^��gȳ�S�%y,�2wG��WZ2�mt�ܼ�e��G4�q4vy�<x�n�����-�p؞�n��X�ѝ:)�m<�`����_��ڀ�\4�u�&4��`2�l �U,2���@+�nv�t��x�$�Qa���Z�����r!B����64jp�� yO/�����ǰPj?x��?���Kk0`�ȝ��t�x��'�z�gx6�#�t7$�B~��N�9P�E��ظ�l`�T�I<�]���]��]�pޅO����ص���#�*L�S|a1�"	l�
+�x���4�6�Qwl�YB^�~�@ _�� .�t���� �ԝN��p�nG�y4��*J�yb�����#\hDQl�����q� ��w�����p�B��3,O!�;n<�1�{��3��ə�.ԣq?�"ƚȌی�N��V)���K�i��w�{D4
Uj.�t��Y��C�S1�P���瑮��X����)�"���!�0�2��\H7��Y�ty��޳kp����;CLh�m�x���E���F���}�]�<&4�� !)K���&�f��>*��;Rx)a1цl`��BC�����C*9C���d��!4d�Eg|6�!!��4�6ɭ欳TM��վ��wvQ$1��"��R^��l��R��J��ML�Gv	L�D���M���X�4���MkB#S�8�!ď�|O����z�yN��~�����<c�^���{����Z�ڣ�iP��D��q�`����(���Y얩��=��5����ά��9�Gt"bw�C�#ޅڱ�˅�.��u��������UcT1=�v%�w�.�T.�-��%�y%͒�xR��4���M�W���
���^9�%�+f���2���B�K�Wƕ�OĤ���i⿬�]���Ń;�Sf�p����W7f-�Vo�p	H��/ut��%]��}�5�d[
\�ޅb1߅����C��}U�n���E�^[�2vIXQ���n�a�[����3���o�-"@i/	�����o�ד�6u;lf�5�6��ǡ4���-�fK��	1Ȅ��t��m�5&�&�N��	��)�zX4��p��΄3���L_�2���L~b���(Je�,=�dr-O�^�����7�u�h>Ł�S��~k�ޫ2�D-3���H�?�S��M�NJ�8�S�5��NHe2)@��O2���Xu*�:P��bK����e���J_˦m㖡ōnr�ە;3�8f�έx���>L�B�G8�6���v��d~` �\��B�R�͞��j�	��̲����������%�|b�)Zp�!e���5�v�#��^�^6.]�nJ�&��A����B5�����u��I�uGC�mk�)�'m2�Ґ_oi��|���j��_��c:h�~�2����X� ��l_�,$�8�xx������QR8�<$on6@l�s`3i�R���F���r�}�{�1����{��<r L&B��Mƹ�绐�a�(�ؠOi�	�>s�2�v4e#��R�:�Gh0��=s��e��7o�d��b6����O��N)�i���w6�&�;u �S�$�N��r#��S%��>����=�V	�]B&���5A����ˡ�a��c݅ p� �(�y���_�B/��Ɔ�WHD��Y�x�)���Ʋ�ɳAp�'`��	��X�����y�8��N����q��Q��L�� 0�N	�\Z��]�\�;�H�@�[j�	N�d�A�I�t`SL�0�>�N�	~1��=����� �~C�B��P,�)�	~,eqޅ<rs�|�	~z�AC�����K��R��u��K�-زȤ#�lqQNć���W�Ep�N��Ew��w�s��ѝ���L@;8UW��Y��pDjN��v
`ѭ�SO�	�;�-��H��-C��NG<�V!���$����(M�м5��L�37��$�6����e��%�'���]h��X����$�qk���ҕ���%��<�� ��+Lɭ�)26�<U��[䅛�>�*��.��.���\�yu�p�q�k}a�-�i�R���h�6��� �!Z��
�ѷ��e�~��:�?t��a^Z6��Z"dY��cDI��?�LY�%      �      x��}�r�H����YT̍����̻�e��5��+�j�;f�"aU ������G�e-���]/�^l� A�")$����e�y2��|�7y�#f���� >�7e���/^��g���e�2���Y|4��qYE{�>�\K+�=c��N��2�?�f��Y1z��dZ���Ӫ�.�l�2���F�}��~#"Ѭ���k�?��}���?�Z-	�k;�p隵�VJ��k�HFK����a��u�>�N2n��۷�%Z��'�?M�\HE�ݤ�@�|�d_%\;Ʊ��w�䊳v7�g�\AG:b+��մ���?���'J.�=��K��KD�ѱ/��ݧ-���G��fG��|L�l�����_y6��[G��M��$����ͅ�v��+��|E���𣬌�����Ͽ�FYzuQ�=�3��$ƴ���b(A&AICЩ�kb��ǇY5�0?��
�Z^�<>,�X-6q�!��pCI�E�FDZŇ>��E�x|�&�/�D<�;Ə�s⋒��ᶕ'pl����vX�-
`��Z�v!�&ȡ�l�oP���zG���%��f��f��Jik�)�^�%<��i�\��-�x$ls�/���>���"O'�oS3�ys�BKa�Pu�T$ZeC�NB>�$��^�,s����\&��`l$��������w�*��>%rɪ@p-k��0��"�E�5���$MY�A��3ɪ{ �΂���t$75���������+���\.��-�
�˰�I|x�����d�B�2��+��+���Xp���B��nuWӕ���Ք��ߖU!4������$��ж�1�(�V�Χ~?�k���6O��Y$L�p��$�2�i+�����:�6F#\ g��a�V�/���ߖ8�&>���z�X�q�f\��4TÓq���c�-��sv�F�����Z��# �(-�P�����1�D�E�$��RB�X�SJ�H��l���E�B��8�)gM�ԉcC��fZ�)-��Y
u�T�d�( "�Hc�6 �Q�d!qS�$`����D����(�	(`����K ���vhi��BuZ0�ݱσ�cV��o[ϋ��c���]	_	�#��x�m�N�3Ǿ�%H~�>��(+(��������Ah��Y����>}�ՂC���rr��'R5�ⷣ��Q���& 0t�:|�WJ@�P��|�;�lT�����o�t��h}`��qZ�qZA	�=f��w�� ����1��^=�'�o8��lR�]��4����ۮ�I�%��V(��*+'����g��2�d��r%�y�͎i ��{|���O����L����~|~�;����S�SL
�~�d����*@�F֖#���>���������E?�`� �]�KS��@�ο��_���/��eϕ8��n)+�^N!S�u�_��*K��#�U�Vە/�~Ab�vLj�Hlbc��v2~/�`�g��`/ȩ�$dex=�<�cv'��w����e���;=B�y&\�n���o�$ɑh�UUA��i����\)m��Ѱ�vm���e��i\�[�AD9Ӂ���9�����= �V������8���c}��Q�%mT`��˪��H&sV>�j 87,�I%�њR�4я�0S��oߧU��No�C/�
�]��� 5�P3�"r��-w�a��I�������o���9#[�G���c�T���9�fw���%c%c�7�K�C�o�k�Y�o�w>�@��x?>����u z��vYh��V8���>͊[p�&p�2��@`2<�a���nm�(�S��)<����V�}>�[π�
� ���$}�2H��GpӉK�{�����eb����oG�dT�siBm�@0�l/�A���t pu���������+6Bl���'�\�� �=M��%���!����A���K��}��1�F2�"&d�pz��L��.g�iV�8�b�����?�G�2��9ؠ*/!>�����{XH�nu6��l�����2=��)�{�/H�q��g,!����AJ�J)�@<؂]!X�{ #iE���.���l����u4�����~m5�MZ/v��5>4 ��'�9¦�d��"͗��5�k����!�����fW�b>.{�(�@�O�d�l]0�XA��:"d�Ռ=�P�v��&&JG��/Hg �~a)�(eL��p���OE�X �%,A&Y����ݧ��.��6�jx�|k����aB��-�[��6^4��L�+���g��a%.��o�Mw�M|��m0$�����O�_g�n��EJ6�R)�H��2��	���)�h��٨>�c
 $'0QyN���?]��s8lZ!B4w`-5��_\�*�~�!�Ŕ�b�/aQH�p_zQ��\D�u��Q�sІzS�y^��W@�$�pT����`����ʑ�0�l�턂��ىp{u2m��7�$�T�@9�Hi������^�F �ܜ~���X��N�����EZe�m�ϳ%��'��%%���,W�]�P�B�W��ib����]9z��7牘1����|p2�0R)����"��:�=�#Ȱ_8'�R͂:Q�C�n��谜����������79f
^=���Җ���-�̼�7h�Z�"E>���r��P�3�j#6z�6�?���M�dP�!ď�q
��W�mX�p��⑲�(�SӸV�xO&KisF�i�����P����)*[��~:���߿���_��G�EY��?*��zPM�QI��4_�e����&8�qmnPB��P� ��6Z�{Ib���|($Ae/lQ�d���|�����<~q�:>ys��(~�?���K,�Z��e�lWW:���y�}Quq�slx�>��_⨱@͡w���R%�:�hJq6%%}�����l�~�a�}�����GV�_�+��q��mV�'�]q?v�5MguQ�������m��Y����=�,��Is� c?�k@��h<�ո�������v���&U7����.�P䚳�ܫ��"[��X���Z�m����5��<K)y��h2������Ť�L7�뀟��rl�&�_zMe�E�8�¥ΥNB�e��؅"˻�U����rTV6%��9Sbp�Y7���-�nc)*d,��`�q�F$<�;�OLDd͢~��U�RyE��J<�G�vs8�D4q���A �� GEV}E���ʯ�-G�vJ��l/�qp�Y|�?~!�Ca�>�A�e�G\��!��E!.܈��.�b�?_��3��qCzn]��Hc�`[W"6ů�
���]�|r�&:�'��?a�k�M?�`'S��Ɋ�!k]��z��):������˘FE�X[@*��`�:	��ۃ���Sxoe��,n�~ρ�gw�W��|EA�R?(��ӒjN� ��y�"����,O�^o�DS�}
p����.��-dlJ�'��?�g�I&��(���!\� G#��H�>Q�M��*n�Bօ�cg���l�x�r�.��2���$Hw�6��nGkC�����w�uZ14�B�|I�&�	a�����Kf5z*ܔS�f�=$Zg�5�hi�Vg m���]*L�/�$t��_vI�,��ʒ��&��w����r���g�]�D���:��*b�T��6~��~1ל,�:U��%npAD���-��SS�T���J!�V~!�-�����܉G���N���(N�I*8l㫬�@ASJ��&�Nx&������x/��d��l@=K9�%�U����oH�Wʆ�SB"?���9���c���>�RY2����[h��W�%��BI�S��?1�QVJ
9%��BEN@0��~-νz@&	�4�'�>T~(c��B+94s_�k����8�x��q��.�V8�XB:��K'�X�8���8u���G��P����{�ns�78@�Cl
595��*ߥ�I��:�������	��Ũ��������پz��<����ʯ/��ܪ��
,U�H��}|6{G�lym�A(�P-IT�ڄ��RbV5�4g��8>�ӻ�*�&�M�����r8����������C�T�$�Jj���Z`m�J�	0�2ې�    h;O�����Q��/d�TR��Z���'RK��K�=Le|�.��.��2o�;�j���S�HY�������8�m(�_P�y{���	u?+��&�&٠�����U�j���L���0K��F'̅���E�ƥ�S�d��7��ֱ��-�oJu������K���~-�g=����~W�>i�q\�&E6*�xv�ʩ�&�צ�³(&��ZK	��6�B���Ci�֍�FӲ�����6��ʃ��d�ʺ�;$�^�V�3l�_ޙ����5�L����zm �HaBk���|�뷴��!���w���^9�VӦ����@ؼa�V"\pB�xx�ԇ%/��.���J�QF
����������g�.G�R}�ۆǨ\A�9�	����Y9߄:���rv�ƭq�e���B
L:gB8s:��D���Ѧ�	�\���wBm-���e���ӾN���Ԅy)�H��M(�]E �zH�D��3Cy�R:�.{c^]g����o��=#�h��)NH<����>�[�}9�t�LI������h%>��1�XU�hJ~pN�?(js1�ˮ��c�����7���z4X�1ܬ.�l��FQ)�P���5$���r3W\���kE����D,��J�Ua=Ǹ�wP| �Ҡڔ,�����#f\! @_�UZ� ���$�Jx��Rh��@�����%��,GS5�}dd��E�1umb�O�	��pL�8���&�\�85S
����+P�y���;隺U�'����S舋�춯�`&��c�E�#,�eE:Ƨg������oh͚�몼I�>;M`R�{)��*��U���߹�g���!٦��J��Z	�vo٥�J�j�Py2/��bqHEb�_�����X�%�3���c���DY�T�ӱB�	�"�ܲ;Ɩ���ueX�aW�C�1�4�$ࠐ8e���[��O}�lQ|�5K"�5�=�"T�^��T�$v�����!6�i8�^˿����#*����,�q~]��$R�� Ev�k\�t�cќ�V/@7m3Ӆ���
	ɐ����*�YCE�	�%t,��U>TDN��æM�/���0Z�SN�`:js�emsw�T|?��p���w���Q���g K�Pj�#���M����I��]��Q�f^f9�I�&F��8��l��E��M�������M��%����Z�ަ�X2�Z���6���ծk����,��E�dyR 6 'N:^*�y�m}���_h?j��r�,� ���v5wV�-#�����W�}?B!�y6y��N�-�Y�bFB�D�xv�`� ��r܍^�Jfp�{j!� ���sq�m�WQ�h�:y��DH%�D+m���V��Q�0������V��:O�&O���J�)}5�7pX4�QA������"�-��#��<ՐG�zK��+w �fjY�l8ǁ��6' Dҗ����cOC������ےQHP�{:��z��Y����	��d޶��*!?�Z�}�sБ�jL�4��n8Z�ULȰa+$�z����f���]oӽh���@L�ijh�ť�G���$�!~4ˮg���o�:kl��exlqI==�~M�C*��fIKuA�S �5M��-���h��ؖP,n� �r�7��͋�W���eE}eM��5t�l�H'���"GW�4� ����E�y=�������yIɝz�മ?���:��k��B�W>��Tf���f�e|���Ҷ��('q3YnM^Aw�r�k�\��K!��rɒA������_c�gY�8�`�R�ke��D9j~���B[��]�E��{~trt~�������U��NyH��O�Q&���;���%��k4��~�:zX�/�4�`u��e]Ͳ�>~�E���l\[q����O��3[̵2K����}�1!{d��6� *jނ m�F��j,��Y;A3o	�>/:��y�M���+_d�7r�^��j��e�[s*iH�Pr��4�S_��d�o{t-�o�D'��2�a4�y 9�m��;�9���~+k��A����_��},%=�Q�nm�A�"i&n\�i�o���͋z@b�K(p;x�<���Z(Ѫ�oJm���h8,�^��'�jȡa����{ ] `_w��m�d� cr�iuBܑS��t�;�B\VW���C��-B���=�͈��>�5�G�v|�����+m;����O������`�a�è�a�־D:�K�8�}h��s�ð$������\���k����oG\�Fm?8 m
<�84-ɯ��)�6����ߐ xV|'�WzO��C'C�a������3��?k��Q_I��tB�
{pг&����r2��WOc?�8�r�W�9�3L>26@a[��i�ۿ%�ަ�������WLz�ݼdb E�lOG�.g�j�O|���_��������>��<!w�܀��D-o�4�
�
��b2ͦ�j���`�O=S���m������Rh0޽� �%��G ��Xn#)(rN��W8�G4��3�@#~������jZV4�k��Qk��v�(���G9TOb��������[x���({�^e�`뷞"T��a�N��ř�7qx�������Y��d<`�;����_:�Dv"˅U[Ƅ��}v�!�E���1yWJ�C2������`�y;�`�d��2��
,ʍ�R��Z5��Ȼ�vE��vLT���64v���ήU�>|�Ϯ)�HH������c�vF���%�5�xF�Y2#\ΰ�]+It�6j2�_~��?S_f�\�a:�r��Y9-��]��ٔ&f~\3l[h�5�;d�hJ!��-�G�c�n���ԧ>A�N~�'����k<8M<<+�v�=O�<�����o�����:i��P�zQ�Wg��è���P�b���ě���\�t����/YqI�Y�鏧�k
���a+�Vq�f�$ф��R6�E��z���c���~\�MX����U�}��W@��^��O���vi^*KV�ﾺ�U��������hu�,�^Fͧ�W �bFh�1�F�9�R�~�Jo���Q��T� �mU����O0|35<@��hjM�A��J�e �gW����S�oЎ�y9����\��I�n���%����%U���������(D�C)nb�c�J��
���7/{��v�m6/fΣ�ɾe��:0c��<��$�h�jcJ~)�}������M��J	ں���6��WL��i�.RRDԋH'1\��K866�R��
'�y�$Jn'�i�<M�ʓ���qVxʕl$�rk�
K��G=4x�d�~��s*(*e]�~>�蔨��cD<J	�t��8����k��&��p��_eQ���}0Ϩit#�����k԰F�L�?��z�![�(�JZg�Յˡ�v~�7Aë#����4oâ���m�^5$rl�(a*I���Z�S�/�)<�Dҳ���4�Г��i�d���,�JE"b�������z�%/�! 3h��M�.;f�)�e����}�*L�����
w���"٘޶	�� S*	z���B<p��; >��m�)���'�v1Ԥ��&¹�N��p����p�Z�tz5���F)�&%�d��H.$�z[-�K�\Km��'�&lM���{9KΕ]X�W0(-I�K_� |m}\��� �ӹ���8�|�e�_{6��z��랖����l4 ���l������' �f�4P1��1�B���(jz�.	�u����qn�bʱޔ4�iOYr��O �Ӭy�Ph��j�g��B�_����ʷK�DVɯud/�~k���g`�{!�]�CJO7����U�ofi,��3k��VTTm�ՃZ���#�~�-)��?ʘ������z��2l�p���6 �酪��޿��Q��܇����>O�Ո�F��q�����=K&�H�4rU�
C�cu����"<�N*�3L�L>��J�T�4J�� �]g[7�}u���D�Fm���������h�J�av��h�J���0���-����l�fߏʤBUݟ;at�T��5=���ͻj��b   ����ʊ���te�&SR�6�8˝�餠���+=�4�`�M�j�45��� ���[�L����8���mǡ��T��5o
!�6q�rh׌�g{ņg{7f���(��H�!Er�.���Q��/є)u��{�9�锅����c�G�3+U�v�(}�h�7O�7�wE�m�ؐ*������S��糝� ���V�����vD0#�qǛ(F]0Gc_�XR��60�99M����Um�_�wU���5���_x5�Z��>����_���w��|�k~Xֺ�إ�h�]����.u������V�sht;��PO��0�uV驾�4�8���:~3%(W����Pj���z1�	q)�f�9�������Ѷ�r7��PQ&CL�c�5�и�Oh�ȗv�)��H�vʔ������X?� ��r}5໧����<�)8sTOX|b|�ZP�iY��k��o�Bf�I�d@���+M��իg�$����&���(����kʽ\Թ��iD�$�w��n^?�j�׬��7ζj�!�VO(��^�%�D���9���5~"��H6��ݻQ��7�/P����r'�ZM��m�.�i����n��3zK�d�[-�A�LS>n�[���������0nڋ۪��kE�8S�o�o܂˷ɽ�;zyO65����>��g��]�`UU�Ҵ6�oh�m�4����.����WIO��\~N,�0��Ւf;K/�'���j
<�W�d�j�S������έ�g�$=�2+|t�AGZ����o���ne3�      �      x�u�k����^Em�|��"f��u8#HI@f�=LX_I�$�*|����W�~C���O��1|Sw�����BDi��X�~/R0�f�,��7fW.�K�|r�D�[��	W��Oq��M�Մ��ʧZ��c��p�\��?�gj�s�:�&\'�>}��O��6nф��g8\��eфA�����0�q�H��Ec���j@�D�'Z4�ȞtN��Y�~Ku5�s,��@=����uW:�sr�^I�t�(�sL�.��Հ�Awk�S"���ր�s����Հ����s�L�pӣ�Y-�wN�2�Ǹ>�9��FyC��X��\�Հι�Q,*w(�Հ�q���@�tV�Հ�q.v����Հ�q��o�.������9']�>)XT~Bv5�s\�KѢb9˻����)R�(���Ԁ�I'\�&]�~�������#\j'����av5D��M���p�sw�рNC�b򉊩o>xՀj�ɟ\,
˩���4g�r�fN?W�'�xр��dk0]5��+�D% %��Հj`,�R�|cq5���K��a�,A�D��h<ǵ^�,Z$�wW:�_�OT,�|eNy���U� �ҕ�{EW�y@���2K���F��-���jՐ|�wm��kn�^5���k��y���(\3�80�D�t�p��\־�98S:G������\���98��ptӣ�<�}�98�L�.��i�µ���o�Ou5$�3��/�f<���&���4	�_�8Sp5��9�$��g�y�e�\x�є��#)Gp58����/9Z~tӢM�����`�&���W�y����mz��Ȃ"W�T�&!��8p���o=<Q"d�6Hb/W:t���3H>x��x��x		ⱺ�������\������%iJ���P$�v5΃��ZSt�)�֔��L���u��"��Ғp㈥�k�j��s��D�g���#�>^VSS��	R\'~k`�Q��)6d�9��Dշ-H�MJ,p-��������p2RJeq��A��t!��#O�>�?�h��X���y��]����;�oNG��h(���3L8)X���9b�N*z)uW:X�a�Kv)ՙ����bZr�OZ~�g�5�Z�J���FG��U]��� ���#�O�\�kZ߂g,ĕ�pA�FZ�.�vq�.d���G#}�^��ƕ��׏FZ�d8�W�Ս�鬴����((�j۫FZ�+
��y�TN�ոh�}2�>��rv5��� ���8���.J����#Ğ�?�{�H�h�\�,G��h���AF��.;W#��d<�[�Rr���o���Y��g~�+�Z��i��X܈f�F���j��Z@Fc-Rm_�����Z@&c-	)W�FZ�d2֒P�]�FZ�d2֒�sw5�j- ��&P{v�h��Z@&c-�ٌ��mk��B2kIHh���Vk���ȕ貫��EN��`r%�dW#��2[�+�i��FZmdrl-����1yP[�[����FZmdvl-�ӧ�i�T)ٱ�G�{O��Z��XK��jȣ�Vk�k�D�i��ٱ�,Oy���@�s��e���#n %Uu5��� Kp��ڢ����H��c�ȋFZG���+e.�^q�H눁<��i�%����c�m^Y��^4����ǲ���ۼ��H��Y�C�h�H��Y�C�-~/i�� �U?^���ƍ�5���Zc�7\����jl����j���@Vcku��k���@Vck��[C-2��O7E���n=����̖�B8r�G��tH�r��j@˃��H� �ϓhzPS��
����PMt��0h���K�G�Լk�6�p5��Aͻnb���Ԙ���x1�70<���X8�-�l�*`���\�>_} �}vb�������dZ�}޻\g_���Ơ�9G��h�Fu7�٨yr�[��}����uS_3���8X�I"�L�Xr�׵FR#1�U�7a��[}�9Y����R�E#��d5�a���FZ�5�jܵ\�Ngk���k������-����&�k1ǒ\���k��]�si~�H��&i�u�D(�FZS�&5��P2�.wy�{ �4�A�a��]��NM�&5�_�ZW#��F���$��5�j-�
��%�^��J\�˚~�nj�|�5�+�����7I����J��j�u�A>qg�RJ��k�1�<���\��v.�G��F#��_"�y�t������⬴�}�$��7uF#��� ����@k���Ў��2�>���F�^����z,��*�FZ{� mK��ӓ����>�tl�p�i]�f	��;4VE��qMw �k�{�����F:(-7�����H�����ye���t��@�_���˓g�# �{�]#�O����F����#�D�vz�26�v;�FZOa^���
�2�����5����h.p�d,w�k4�텛���F��p?aM�5�z��]�=��]��ǆz*]���k�5�:��)X:�w�w��v�-���,�k���g8}�,�����H�Oچ�U���H�Cפ�V�w^ۈ-i=����N�cQ5��{k���uШ���F#S���el2��{S�;ǃ�s�g��{�1d�4�/fl�FZ;�wn�Η&zF#�[�X��ݡ��	��N1Xc�~� ���w�Q����:ce���h�B��tl�1gj���.�D_;#�Ԙ7�靰w��J/�����{G{��m��#�&��[��Ͼ��xo����n.'���ݡ�0���=,���ޫF[��� �s��EW��]/]���*�s��j��B�.o��k,"5OĺW5�P���h־�eֲЦj\�7t׺;葽I�rh:_S<�{W�f��Ñ����5}����--�}��X���ա���~�q�}��p�'�5α����U׶��0����Dدi�Fz,�p�����Tx�V���!����}�\~�6�!j]��N�R��h�c������zf�3�ٴ��9r���}�uwn}����I.Vc+�0��-Kt5�a���qB����.�d�s�]�ΰ]�_R[��_�me��!�h�,�A�����cv5�zo�S��x����Z���ht�vu5������^��N��Ks5Қo�/F��X�;驑~��N�[���ᷠi���P���\��Z4�\]�p�,��V����������m\����F8�pr��F#�_8;p��=5�免�q3 �w�O��ߒ�K��bp5���8���nb��T�o�z�=6�	��#?���pD4[�ԵY5���@r��W������jq�U]�L�{~�D*����j���h8�y�\�Y��j����@{�w����Hk�u|���{GT���H�3�Ɂ�q�$W#�Ƃ�Wit�Q��j�u����^����ϒ֮�=NzlA{�@��2A�/�Pxt��i�� ht�pq5��x��H���{��h�u��>����uW#��=P@n����CP�FZ��k��zo�Fq�!�i���^���o�2��^5�j-���i�"��2�W�� *�!ڋ����߲k�u~��Y�C�_�F���:&�>���~�#&�	W�����py�b�<6_4��H�?��A7��G[5��H���}�?��zT�h�����/ݸ	Ҙ�W}��K8hL��F�]#�_JʼD{�O|�w�w��n�������6|ү��FZ�[f�;�/!^�5��~o鵼�w��!��jL�tYۢ�'%օ�{ǖt�t�6���I��B�n��몱����D��2:��I��r5�e��I#�{�]#}/��WI�\��֮��rYL��Z�_��j�륥���!�.wWc���Ƴ�B�{����N�l���F:/t�t
�r����ȍa��Sv�׷4z&.�<�D�&Ul]�ί˯��hĚdJ�&Y��W�Cq7�����.t=h����v���g�y�0�i��ؗ�>y�+�Ect�lL��#:X}�\���1��y��w|7�w�%�x�����[.�k�6����:�<nKڻF�����x��2�����N��t.g��g�Z�V�jA�gr5 >  �m���sz��]#��;�^�-���4 m���t5ZK\�%:�2օ�Uc�pg64�r�044W����Ժ5�ط��E�˾����[�G���x�î��P��\Nz ����H?�h��}1�(a�LV�p{�v��=�d4������s�F#<^xX8Ƿ�wpy���<`|��n�����\�ս�je�HkV"�7��`E�<�q`�Hk*���!��k���5��+=�q�wf�7��%e�}Iyn.��F:/t��L�x���󛅆�|2��������#���f�1��V��v��2����r��IsZ�t�H���'YCW�x/yd��<��|�o4�;�tM+��q3��j�ai�#��V
ꓫ��|��Fϵ��o�W��2o�M���$�5�q��I�?D�]��vQ.ub�G����Z/�����XD�F�.t=i~U|��7,ppRֱ����^���I7�����Ӎ��
�����A��O:���j4��M�����:;�����t)���<s�\�{g���x����%}�5��
�38���][1��z����qt|$|���Gco��䃝0H���	�����?+n5�      �   r  x��VM��0=�_�?�n���Q�Z�R���0�ؑ�в����������H=9���'�͌�<�e#}���Ē���r�5��O��Hu�M�0���ŚeI��Ӭ�ty�<&�c���g/[=6F�c��\hA�ct�
�/�߄8���輒�����F��X
�u�덋L}�Ʀ--����g]���C| D%��[)�օ�X�-/Me%�u��=a	�_��A;+ré�t��j'�?а�`!�O@݉�$M.lD2F�LI�����O�|QXԱ�O��\X�����q��=4+#ciH�v��υ$L�5����f�����ߊ��	u]�`��HC�w�kY�.�{K��#��lRJ���f�⫇�5�3�u�����~�j�J�@�Y\���tޠ�>{/v�By��s?j�̈́�
�1��m�	�4�A����D�����A��Q�T�7����RQ�^�_5&Ȓ�M�����%�� xx�~)��}E��Q�����}��/9��R�:lNI�#�,g�����m<A��`A�s��C� LS���,�[�8�G�j�gsT�v���t�l���������w]WG�=�E?֧�C!	��e�Ȯ%��	�n���š�ܵZ�?�P��      �      x������ � �      �     x���An�0@���� `�B���U����EBƙ W��N9UN���	����RQ�������w�5ĔF�k�J^�_�Ćq�2>�~;��tA��ws-V�f�g\b1�kx�5���\�<L?��{�}q�C�!���m��#nc3[�c���}'3�X�N�	��3!��|r�����y�-3}g1��F$�e�W@��a��4�h��=c��%|J��U���a�̿�+�����/yX��#��.��n��U 5hϞZ��ɞ�EQ�9%��      �      x��[�I�&�L����[�0xg���TfJʪ��G)U�n $�dH�v#S����<��.0�P���P�����N���%k����/��޹`�VeF����v��n��nn����(��y4^�cd��yl�Ip�ii�xa�Uq���e�ʳII���`�g�`E��xqz\�(O�t�G�����ag����Q�1m�W�eq�n�Y�l��ռ�⬽�����o����lz;��oM��v��	�e�&/���(�W&��2��ѿ���".��8�聫�p����n(���{p�9>�v�k�A�w��t��I<ʳ�A�F���<^�㇟�`fR�GI0��Ĭ�� Ɋ`���*���{�NMn�q�,���(��cqzg�U<�&YN��Cip�(ϳ$�Rz\0���2��~X]MC����A�Ϣ4�L�h?OJ<f��Qn��YDƚm��+1�*�����f��K3�W��ˇ�W��iV1�}$K����O_�&&ǥh���a�5����z��}���G�]���F�29��i���b�!ߡ\���[E4�fL��%���S(3[�rI�W�]M�9M�8K@��Z<�PZŉ)Z�ML7\��|F�O�G�r���L"�/�&�x��ƿ,��J�FV:�D��EY)���R�Ű�m=�W񈆵�ho�z��xru�%���I��ֹ��o�B?	�$*Zt�6��-��^���N�w\���J����eX����E��"�ċ�F�rB3JoZ�j�X���;�i �M�;�]Z�Y^.e�C0��h��C�h}�(�C�@Y�V!����<��14���/�����w��4Nʵ!,�i6����E<γp��=�ϒ�YJ�N˄�����ѫ<E����W�[����9�g��h瑘�e�[���s����~5z���d���O�;Ç�P�Kz�2�=�o=p�%�5�c�㜶�������T/��[��XZ}C���6�]�b�1�y6JT��!(�GQ�dE�d*"�L�I���e>�1��D:n\�̒~J'���{3�:�����e�߹=h����*gr�d-M�-1�`V҆?	�^�|{�^��}u��>�]��x~��~�����yu��]��͛+������6����LgI6��e��Es�^f�h�vè(LQ����\p��؍�n���'�Au�(�vN��B\��,���66��w�����DSҴ��:��������`��B#�N��J��u�h�HBH$�Y�J޵��UĲ�g]�#�~ �e��/%�ĚDA��n�D���Um>��7�w��`π��;�}�AMx&�$ܚ.;!tWz�]���q&���c��>��ޚ��M����넵���E>[�����G��RdIƻ����P�cVX��,��Q��c���8��.��$����(;��lf�V�h~�9�/��{ ��v�~�`C|�ٝ�W�0bÍ���퉙Fe�jOq��%k"|�h�5EV�t|���BC�MCCHcu�����L�,�ۓ����TL�'�קO�o�Ó���8>��m6!��`M����2N��/���P����C����H�V�?avɐüg8�J���}��ce�-�-#��8	�.+�8�$y����EVS������!bӆfO�E�R�t�W`�.e��.�Q�l�ln�ݏj�5�b��U�y���cl%�Q��/�\m.i���:����e�w�[���`�j/�I���1Et�i�Nh@l(�j�+P"���]U��	�H���}mm��n�`{E+3�Y�_����;ګݣƋh��q�C�vȐ;�:Tȴ^İ�YO��������I4�Sx�Lۿ���sڻ��u�#R>����~Ɠx��-�	#Z��!����vܩv�!)���?�O�G;��!�u��l��l�t4v�44q&�f��$d���b)>�屎�y#{�%mQG�8!_X�H�q�P�Ʌ{�����o|��J/?�	7�
ܫ +6y�yƛC���6�I3>~
6E�ƤK�I7}0����q��^n\'�z�e��p��W�ٙ��0�4�Z,y���X��z������A����'������d8���~���R}]4�َI��c�9��I��!�!@�_Vf��Ű��΀�(<}���(����V��m}��˷K��-���2�n�;������ݩ];<��tx����]޼;�/����]ܼ�|qzv���_7o�����o��+������t/��.�3l�5D�>mh���jX=:�y��p���F��o$�d3 �i ��?ϒM���{D�I�����.��Igx28ĳ�W�O�]���������w�W�kuyV���&YlN��M6M��O�x�g��b�-����Ȑ�ZC��<Ɛ��W��ߟ^aQ��\���u�{�X	���/!#�L�A�����׷�7�|u�o�����q��׷t|%j��8;�3�.�aosxÓ��G��������Y����wW7l;�1��2����09�P�A��t�ꖱJ�8{z��-�������-y�x��?���<Dtڂ�g�rC%ɛ!�f�l#�q�/�dӷ���ҎZ����`�?v��vw�:��a��`�n��w�� }{&
��3㔌��P���~�ގ��I���wPD8�7{G�[���4�b?/%,�<�)�'�������v��L�<jMc%M����=���S{�����`wX	��v�p��`��!�r���7� bY	�؛j�K6*� &����<9�4�)3�h,�8���-`
�^_�������j��J�^fF=#'�-��P��6G�
`j���]�GG��^ǋ��)o2�ͨ�s��=�
S�w�E��`������SjFA�B�;�q<#sa�@ ��xc�;���gYe������.?%Y9d��X�E�7	9���������&�t�O�GQ7:2_�^��������<4��9�>Fɬ�k�z�q���bcD~t淈Zn84���:�2`���_x��9�+6�ގ��L�����s���$x���Ym�_۠��3"��b��\�з�]��H�F���}�Ͽ��꛷Gg��_�7�ί:_���:z��]O'�o����wfߜ�����w���f���~���ť ?�x�_���3�bei��l�QL^n&1�U���6 �7����$��(���ߣu��<�hK�t��q��#�+{[K\/��Է�V�8�H�G4�в�.�D�>a�-�t��	��p��.�0k�Ŕ�]{g�6>������E\h��q2!Ŷ�qaD�6a�Y2��l��ύY�礱CW�q�(�'�V����Q�!l����5�ݎw~N��	�Q?���A�H"mdD��j�, ��Y�,rRY�\�LO-ҿ���Q������F�kzގ������Ï4T:4$�w20�h�����K`��EX~�I���KRՓ_�i�F�(����b0#��֘ø�{��7�u9l��f"J�b"*���ln��ʄI�Ӆr4���X�ZX�d�;��f+'A`��p&�L^�2�'�r����a�s��l^#�c���;��;��^��(5\1��,�+�$C�"�mu�,3��f|�\��?�.Z��,'�&����Lb�3�r�P����Ao�=�ƍS�A����'0D ��)�r�J~�=���$�ٖ�,{nh.x	$+\p�3%d�M���Gxq)(����W$��s���+��Yp��7֭[p���,?^R��GHt�7p� ��&?�L��H��ox�+N>/LZ��W܀�@xeI����s��,͌޽���ᵺ����gLOwѳy9�T.�n�@�����I����ˇfq*.̨,�Q߬#��8[�1v���|U�f�y��
=	ާ�7�u$+X\��4�~��M�=��ڧ�YϚ~�Gx�h� �:��~;��ʥ/�����M���h?�@^��֌2i��w&���)���͆$n%�,	�$^��L�u��!��Y<��˗�Ȑ~K���B��"��    a�ܻQO�ާ���d}0��v����=�����__�Epu��"x�&n�YIg�3��?�_O�H�{[��Y�$fx?_��E���Y|�pd����ݷ��ŷ�o?\�o��V��e��=zW�����}!%�1Ʈ�Cƅ�{uq4�߷�S��^wM�ҟ[���{N"�b@�@��4�����GK���(��1.Y�,iV�H�4	�%Ӝ`����e_C�s:$�<E���>�#F��| .F����i�^����cߏ�qظQ��.˒"�u�r�<�!�8�f��'Щ�N�-y��@Kr����(T����U��	9�~v׻vJ��O~�co"��xaVF0t8�1��L���t!��kL�����yE�A*�i�K*��4*��z��?6���Hܕ�������Z1̝��?Ѻ �ca򇟗���F9ë��á�]d�YYp�$ <,�L�Do�K��O�1�x�5����jE�X��G���7h�X�Zͷ�V�HEQJ,�u��5�L����0�Bt��j$��Q��AH�47���ԃΘ ������|ᔮ��Zp�������4�O�df���(�%�9Q�!���>�c��ټ}�`<<�wO��jG�y�����x��j�ᤉ�Ʊzs~�t�9�8z,����&�?������ "'�' �[2���W�T>��rvq}Q���-5	,FBO��Ȏ~87dY�@j`Q����5�(Ϣ�8l�c�9�zXsT�c�J&�g�?�W�# ��2�4v���K9 ������6�w�}c�|�M�p�I/7kpе�0��oB%�˖Sdѥ��"�jyX��)$���l6ݔ��l1��X�X[�S��'�0XIX>��W��$FKT�%�EK��~�6`c��B�?���7��܎g�V���ܱ�B��w~A�4Հ��p��Ǣ�q��6c'5�5䤿Il]��#V��<礞�]� �h8��ځ|�ݨB$���N��T>Ap㝑�s������"�;�n �z�������FzF�z$2,Q~VO�� �r�(c����V7�<`��B���ꖌ�9��K�î�>iw��]6��y�h:����#j��PLlq�Y`!����JQv�J"7��*S�ڶs����N�A�t4i�®ý���SL�h��w��^&RE]#,���8�=��~k_�p�ןJN� _�Z�������ۋ����gW�n����;�^��������s��-ؾ���$��_���1^}I�8�)\dx5n��׬VD�4��Q|X��h�Q^.x;	Ra�Ȝ�#�	����7v[�4B�E-}hW��LZ���Fj�Y�͛]D�D�Y�eH�Ը�^J��w���/N4���شL%�ϜG7�ӯ��3����Ƅ�.FY`�,����9�d]=��?���I�(��H��qj֙gw�شA�+@,�xy�Yؠ(�Y��ht�pYI��hsr�.1�%a��ouI�JeZX=nċ��p���D�WS�����n*��T���
�譌$�ah;K(1���	���<�V���[�'��1��]��%.*���q&j�ē����7��q�e�@֣����Ϻ��Ӣ�GSF�}�ڤ�hFL�h��7IL��i;�V�{�����Nw����.�;����:���̽���C���B�(����4I�{3�j�8�i��1@J\�x����ہON��=`�^5������=;q>��LI�E6��v��a&81c/��:8��~]]�]ii�<oi���w?C���X�e�z�k%�^<����$���Hh6�� �@�ˎ҉��\�"�I��$
^ҿI�<Υ�rl��+�&�I1�0EM�$tLY�2�肳*ˇ�I�3	��va�/��p/�-����:=fU��l���UX�=(S��('Ϙ�^!)4��/gk�����&�"	�4R�#����ۘICJ�ރ�C�%[�L�nw���'����a&�
��C9Cp�k���݀}��ӳY��y��_Xm��A����c�b��H(iZ�8}�a�Xi��q�e"hk�i1���%�'��dY���h7a�j�<�)Y���r	J5h��Cfʒ���1�z�D�*"Q��D[�ؘ-9g�}M�8�iH�*�fmԔ�5�_?��87�XJG��#v�	*���ŵ��IP��l�8G�E�������=)FV����smp&�y|��M��)<���25�n.�ek9��u{�a����a'��%�Y����i:����D�u���c�Юc�[���x��:�l��&���1@߻���wGA�,1FsvU�N�Y4��� jc���5��<N��T�Î�J�]#�J|�H�j�ݛ��`K����O��rp8+NR,�Z}�Z6��y��.'lTS�ԍٴ��\��f�.�0��p�^���O�-��_��i���S"��r��+XsX�;dG�_�z�Ծ.�(�v��[�֯j�m�+��H�7B�7��u�%Q+��̚�����ETT�&��8�:#�'�����TN\e}jl�r��Rs�]�bUN����zD��.�g�=B])���0���|Hz��a�*���<�؞ٲ�Қew�ش��]�~�&E�kw�m}^��y�{^(��4���|s}s��y� �k��U�jϞ۳]�'��ɠ���"�R�C�����c	�͓�5�F	3����Q�7����$�H�gJd�����mτ+S�0�1���$]�N�9�P眿��u�k;���H�H� �wT<4��[����yZ��+��Zx;�����H��u��,h v�(�&�H��U���qӎE{����75�͊nW��Ũ���ϚtV�#B�p	��?���
I}��R��F�䌥�\���\ērAkŊ����U�<�������S���)P��n�x5{��<� 9wM��ȍDӓH�ńة=v��Y"ULƫ�w`[�q�A�9 s��.�UiX�]�9�Cnm�,��m��hc�9�sTx�<R��f|(N��Rm�uI�V=ʪ��9XB'�L"����]� -Y�]��7 �����Kd��U�(��ҡm�rU��,��Ag0	������h���k������ S�����L�- XDi)P/p�Kl�\@օ�+�w��`tN��4����­��[�<��n�l��hY�)g��5�i�` �G�siH���S�	!y_.��=���Yͳ�u����E9'���s{˰�_���K�=���&Bkc��p�l-jk�S�A�\-�`S��Ȩ+T�g<=d�1�Yb;�rȰSg�q#��=j�$�B-�=_S��%B	��LõM5��䓪f6��dUz%Sp�I$��*���K%�4�Y��$ыX�d�BS�:�"�^P,N��(�U�'���ZP�%�A�:���t.s��h����LMa�|<��^�����+P*"�����0}�_u��c�t0Qd�9^+2)}�C��v�m�A㜷/�0��W̸S?7��C��}A;=+���+��|AR���$��%��n7��ܭ�d)��U�8,�]�K�u���I�������xN� C;�p�D� 2�A�4Ȑ� C��x<F^�f��fpJ�C�\��!u;��rM��h~�4yW;'���k��V���W���,̘N��-dS�h*G���D��	�g��B���P��l�sZ$��\%�d�����mle���^�_�6rF�ᙡ��e�x�
�%ǐ���gsD���q�ǟ�O�������"�m�؛����?X�4)Jk7����-}z㙮����k��,T�ڗ�E J��V
5Hg�(�����C���5���ʁ~�W�0��s/�2���X���wBv�K m9m&
����V�F�{T��}n ��AdÅ�6�J(�j�ɺp�DH�V��!�'OU��[��*�%S���+�K�:�X,|Zbߓ��ΐ9�w���u/�r���aǑ"m�dU��| ����M��kY���9Y�;؎w����ԁ ��GD?i34ޔZ�j��`�����dK�_�lq��d[t{a��/n�fP�a�y�.��/X2
X    w^{�����!��N��5�YLS>�geu�;_�͙�厜)� ^�2I08iEBA��>Ǵ�&��m�чy�TS����G�>vߖP��s����m�zf����3�º�ljg�z��GdlR[���A��=`�)\){X&���y�-�n�A���� 3B:�=�1��F�0�p�9��R�>T2�&[��Ү���  �ءIj1Jn��@�V%��.t�)7�^�9�R���Q������up~��4x��m���������(*.�]������$��:}�������u�_8��]��N��q���o.��	Xi��.O��5)̙{3B�@�n�.6��A�?��(�(��/K�LR�oH�ݐ�jV��e��D�=;���Q��:����7>5.�&,����Hl�F�;ҋ�Tg�Y�p~sM/��>h2Ϧ��@�R���rtt��$�\Az=^0=�jg�=#e�2�ފ�&�H
���t��:~\֕Pm�f�B ��~S���,��y��%M�:��c�/$+!�%���8�f�8U���f$���6	C�����El9@%�s�\�8�M��e�֣A����������'aC�>b�_}�X�Ii��1�jI��,fMμ|=��p�8Mi��d�t%H�Ҙ���:Z��;::IVR���!�nVQ9���^����]�����M�,��;j�f�c O�2�a���	̱(}�!�A�`�jO�����A-K�	��V�S�u��3$�\��;��x�iVx���:�����Nt�gS�Ⅲ0�3M��T��7��-�u[=���x̹f��_RL8Ĩ��;��ʽ�u��W�a���@��A��}�%a����I	,�$Mv?�r�z!�*P�ǒ��������˫2J�ɧ��<�?85��5Q���:�����_����q�IU�����*�ǧ26��ǒ��@�PU[���몠Q��Ô�>��Fw\dj8�JBVf[u��v�|Re߂�;F��:�p�,�
#m������kI寨�C��)q���Q>+53sn�Ɋ���Fß�� c���Hl���9�(���1Z,��8��A���j�2��s?���\��]��������wp<�;=@�KP"�N�]�x��Dg�5$�ĶЀa��d�AgD;�D��/���F`9��ʱ�)g���;C´�V9�e��NE����,-T&V��qˇ�����-��N�|� ̞�q��a�{Pȋ"C�pP#Qh[
�a��=l�À���d������s C�d����V�	��Y��M5��ze�ؒ�s��0��;��V���~�
�]�=�c�ŘMV'�a,��ݴ?���߽؛�Y�����Z	�w�?hي]�z�&
��B�Ē]!���~2r�'���������1�0`hb��(E⏌mF���խ	�&�F�q�=��+�v�9[��*&�N��w��_J�@��fe �`
�t�k`z.�|@@���`�螦7�/@�N�G1J�M~afQ+�,�K�a��<z��H.~�O�a�����o���g�����巤?f����������E�� ��miҏ&٢.�=��*���^�}��p!��$�~-��=	�,ˀ̋+�p�Fi�Gf� .�vI9��ނ�Y��T�L�H���uM�;Ω+E�.���mj�*�b�bT�3t���r&��*���BL6bS-X��ۖt�olv�;���7:ILhA'oV.��H�E� $F��"���OS�eAt+^&7\�V��TY֚�����HT3�r�>A�C���0>;�BDi��GA;�TXch�i�~�Z����i=�7���c����Q�"����� f9�3�,Yp2�g Z#�éK���}���8#���I���)\t�P��M���II��=|��y��గ?O�O?�|��8{s�����-�������wQ�n���D�sDg�rL�ݳ���ln�Ê���݌�m��[ޟ�@�'�MY��a֪�96TC4]�ƶ("��u�Vtp�����<h�JW��hT&���]8h<�q���h�58�ѿ���R��SL���k��gr#;wd��"1��0
0�
��E�zs�v��l	O�b���*��ef��E��+���c������x�X+.�i�����vPl��Ra�:�$ed���Rt�7�6*͊���C#��H�`hi!��K�$���[�l��ʑ;T��U�f� �����
�X��t��(�آ�j���'%�� ����g��ؕԹr%K�Ac0l�ū�3�Յ /Lp�v��X>���n}I�� �w������d�Sr\��jX�&�E�F�e<:�D笾���f�V ��,����Z�[�����	M��Qk�4E��~D��|GQ�"<�5�;(�5*΅0�6lnAѸr�g���|'di��2�{��4��G+�4�4W`�����dP�_�ԥ ��Y���Z��nN��ބ�u8Z���	�G���uF�����^��O�;�m2����&P*ӊM���]��擵�پ��)gP��o����m��@B.��8�b����5�������i�.X��.��S���k�(�i�2JjSF�h�XT:)���l��%=-��7�[]5p�S��My�Je�h��$?�V=&���S&��g�W�̷K5���c4sp�H�kև}F�`5�i{	�$X�fs�]��ָ.��&���+�u����uV���"Ոx�7J��K�*ߜWg�H* Q��ŀ��iPm���=�Q�F%���	Nɲ���>�v�Mp,<R�}�<HDzhh���3���Z�T�C#d��
Y���j\�?{T��DC��Y݅D��*ތ\�`�v`������q&e�����4Ts��]uW ӛKi<I�1疅}��Y$�ů"4z�f����?kP�1׉̙�iP-��
lX��(�>	wBZ�`ts�!Px���!�E����Gq�$��cd����IwK �� B$$#�=��'��O���\�\ق�.6rtg�����S�9�߭!�zwY^+��<��i��E`�QUݓp8��"h�C{d	�
wЙH=��:puaK@VƷ8�Wב�G�G��z�ojw��j,�<��J����ĵ�<fE &W8oVT�H�
��U�o�fL��)���Fñ�I�Q��LK��h���5qU.�@KHz�*�痄~�k
�����������w��ų�6)[��n[����~�b���ӄ��ĕ�כg�$�����]�<�9?�a��S�M6\�dW�gq����_/�h�m�r`f����9��_��y��N��{3������88켆B��Z�vv7�'\�tl����@�2@�/Qd�>�Q"�9L�b�˿�>�"�?D\��y�qX�[�(O�B+���,@Ĳ��R��ЉиN��:�{Ӈ�qb<ɡ5�5�q��&6�G�8ǌ��E ���Bs�)�ҳ;d���H�-V�}�=Y�P��^^e`���_��K�'���?�ކ�nha}h܍�=kư��=n�k��lJ�@�5<�]Ru�ػ�tw^��������j�;��n��F�D �R�;���
*�f��,�PC:1����Ū4���]e]P$QLW��D�X,y�И��a[8qP�n0�P�V�EEp U��@�*}�y�GSv`]�e�yl[�X@��c䛬'l��I�W�ȅR��UM���KH�s��I���@	Hd���D%���>����~����ѩa��wi��Np{���!��[;��~��bxa5��������Wa���ާU^�!�Ya�ǋh��K�ѬBM��K`��KJƵ"��9":��5N(�O|2��UA+T#��B�,�4|� 3�eL7�l��	�s�a�uL�����Y�@��R�5�Ym+-�|R�Sx-��Q+yah�\`�e�
��`}��!�*��Rw����8�Z�>�%��pİ(H���\"v���HV5�y�����b���d��U�=T2[�� �q�cV�0�y��Eލ�O�4�CҾn+�]���<�[l���Z�C��BZh���n�m��v�Rm    ��f�6��\�1*��A��ݺ�Q%셄����}l��<r6��S����������3�����DK�8�0��d�i\�w	�Mn��tR�C:�_���˔��J\��ηվ�>d��h߸���VnVh3 d �;��8^�a�"��_��9�ܙV
>��=8R��Ħ���k��%�!	�I)�o�/cʢO\��26H԰p�s���C�M@��s�f6	ĸP�q�(��4O4�?=��`��:b~][�#0ا�#Ҋ�c��h#�����q�eBh�߀>�+�֪-�\t�ۂ�G��!�0(3-�Z����Ws������p�?� /��"�ͯzR��� �q^�M%]���.����J����̈ΰ�ϦM��]�_�ο��_�H������^��;1��>�xB���¯������e���L�<��A�+�2����b4��q@-��~�-?�)���ШW�i}Fb��Z�����s���ݏ'���k������4�^;Z�r�ۑ-*���V�0,�*+�w���ֹ!0b!w��*Ҋ7�"w��t~Em���-����L�%|�iU��Ԇ�u´�z��s�H�0�J �L��k��+k=~4<l�}~\�q2%��83Cg�G?��^\���}�)�;Z��C��eH���r-��>G)R+���	y�M���j|i���M*��v���Ѩ0�ɸߒ�a�
�C�L��&>f����1��C_��k��߈{��Ɵ	_�{�d�������t�F<y{y��Yÿ,u:+@S�.}��'Tx�c�3=Rۘ3�_��@$+�x��`vg�ͥ��OqU�b@�6V���*�DD��7AN�B��d9�j��U
���ݸ�tkE��^XZ�X�i�o}j��=Qơ��H�	�ћ/K[�5�>�2˄��� 3��Qu�d+����:j�-����߷6�[�#c������mr�|��-�1[�>�/mV~�{ǽ��Թ�y�3;�AgvK�Gsf4�����8��eq�[�Ts�����oJ��<�C�l�o�x}բ e�������y�w��M+��jrNVC��4H{���y-i�"�lc��Vj�+K�8x��R0^���ݚY��8�	� d>������kc�5->~bK��V5x�ͧe�lz�G�Ь5�Y�&���l���\�eb�_��5�S��To�o��I���{SI��!i��W f�-���ED)���C~f�-l�q�����F1\3�|�:�8[�y��	��V���9��VA��@�Y�������:��Q��?��oר����?�����"�Pz�w/˝���*��F��_��F%t��"`�, _��`��E5+�گ�&�?9 ]88��H�=u$_�8�n��S�O����-�l�T��v�`��[�ӂ	�lR���4O��v�Шu���aYjHr�5ɴqM*h��9eCʛx%>q�|�c�4F�w�-J�����ɩ�\O�k����VC!$:.��D�zPi���O9�y�9GB�,.��-RU�^
Xk1�֣�����&�(N_k�8��X ���ci�~��_�.��Q�n�ǉY�-C�o�N��.Z�ް��u:r�ɣ.��V�"�RFߖ�?�'�*Y��$ٿ��Oz�;�]ԷIl��U���'��\e�p�h�-�~�f�hg:�2��F,��B���,ĮFr$[��2)�G��K�bG���گ��S1��s��w��K�)*�9�$�ׁF��G��qw�ŷ�% �d���xBG�����EZ�(	qR=߱�9�y��,���}i�êDK��ߋ8!.�H�w.�C�8{rv��o���;��*F	��P�t`P��7���RO����?�o��Y�v�dw�5ڀ��{.�}f��]�qZ�RUӬ0��9�Q����� }./D��n�q�e��"��AY+�)�pT=),�I(��ӓ�)�P�O{OV!�*SZ�3��&zf�o>�%mxE�_�?�O�I�^�_d��=�!�a�w�b�|4̹��It���BI+�7u��{T�Yկm��Y��;��n,q��J[$F�cj��(B�.�}�k|���w���|FE�b+��
����O���~~�K"���V�������W��x�N�p�B� �4Zn��i���?'?�+NP�GT�\H�#��H��q����V98ʙM�V�g�!���<�5T�!�*]�|�5�$�� �p��P6>����[��Q�~�ЙIk���X(��]������a�sxH6Y��s�98v:���z�;?~?ס!���(J7E�T~�]�K�|��x�z��ꢂl�ۼ��j��&��l�PG�L�EKajޭ�#$���*��JY���l�]\NnUmq�o��%����V�qc��
 ��4��@k�v9�B���"�����6xQ�FRf�+p�R�-A���3��W�U�Ƨ�`K�2�;0ڪ��4����&�8��m��O[���u�20�J4>R�f��G �[g�m�u�:�{��ӃM�Z���#���D����DkW��v��9�,�Ax���߿��Ƶ�R��Q�c�����o���`��/��� �S���)�HbE�Jn�vu0��",	�RPU��ό\po����)kfk�r��n^[�tcx�i���$�2�j_9�g����q������AY��T�f��d�l�قc�.4,O��{�-w4���՛k� e&�q��$����"�����>�3���ŦU�۶U��?�(KŤF�Ɍ���$6.���4,�w�km4Y�ޏ�Q܂�[7�|�l���5�`w#s'O^��є�����l5��	!��Û~��H@M�7D�R�����<ݿ�k�V��r�ڢ1��gQ�l�}�2e4n:~k��%���
�v-���B�*�VC�&3�-�$#3�,�3<�4�`�XF2S�v�s�������0]���ʬ�jd(��(6BTET�����:*�3����o%ee�������B�W�.w��0˔�ջV�]���᥍�"�\OPۺF��,�H�KS�^&&e�i�a�:�Uue3�=D�'�2f|wa{�V�eM�	��:��T�.������r���u��	�-s肃�#r%z�G���t�`N�m�Dg�\�{���M2@��\�㒛�Cfܡ��?�<[pDa�ZX�Y�$��J��1�^-]6}55G�g�0�^i�U�^qܾ�����ã�.Y����4C�q:�K�3���~���B���h�!v�
��5���j�q�]��E#���0�@	L���z���H�%%�1&������;�	J�褼"��>x�
��3���^������ZHޏ�ض��o��U�x���f5�p�l�l���g��T��E�4��6rk����Gǧ3�Sƫ8�]���g� 3:7;���5�Z�n��@�~!'҄�Ӭ�I�u��v'� �����Y��pa��v=[V��s�R�m[�IYHݰ��m$Пe�8I�xٌ����9�V�)���A��G؟o�t��"xƦ=�.D�*.��`M\'�tN��ZMO= Z��df��NK����:dLw��9%����G������֎��儘���x�!��uý���z�����Xϓ�ٕ�l��;ܱ���U�*�VA�IǦ�z���D��2)��U5�Î���rq�$�_��"Y�����T�6��}�>�5ۘ�܂� ޖ�;lï������[����m%���fm���\#�VK����H�#���w�m62ǚ�\.��|%У�`�&3S:W�nN�W��D���d��+��?�D��|�L�7c,G>�ضc������*��ǧ���pq����
톈����[:-a�b':�쎥:ܢhD���c۳�k�t$��k����΍Wt�)!�	-X�C����c�����k�Z�s���ǖ�!ؼ�V�����Th���p՞���G�$v�9�u��ibF��SL�\IԦb#6�{���PNK�.iZ3,.ϙMҵ��
?���a�m�C)M�L��8Mf�3��"�jw��8��F�����OU��ٚ�1U`��B��ւ b����ٔ�mG�\    OH�yD�x�Z(P�q��úXon�-���)3�]�lm��
W 1�7��i�0��8נB�ѵr{�,�(�{����h'����$$�,��\��� �-��+��������mtXu�_{!����=n#֒��@�y g�6D�s�Ա2F�i��*ū���6����4�	?��t��
 �
Ȉˠo�}�]���ظyc�{�*A��>���g����p��V<�s�j��$��%�u�(eŏ����EuH��H6��t��Ϸu��gW�[���vB�W�-rwG�(�Iʃ�(������P�F�}nȟt�uH۫�V�߯���:=�h�0տ1`��5�|s� ���6�-��fx
K\`�g�]`���[d�E�4�,�~M�_�F�<7n��Z	#��϶�����l��Q{�h絫H�N��6�e�����L
eR�JVUG'>�.��-�W4�k�*
�K���f^1w�v�c�O2׸Pz�/�g����mgSf�*@H��&r�Q)���P樑!��m��W�̗�܏i1��i�I� e�<�fۋ��y.\G��m���	�
��A�]�2����4w��]0֒'n�+h魁��#��B��j�?�aX=�mG���^�Md��p��L3�̿����%�|�����������潓>)�i��}e�6��D�>jȨf�VT$��L�n�bLrc�� �����	:�8�+p�MH�Ю��q�s�֑����|������[��ַw2�U�Dw� �W��x�
�Ð�=�j��?���n�mgq���jp [m�D�Gż�l �2�J�`9�ri�XE�T��jt���6�42F�Jب|���Ċ1R'�FKi��57i=:�4���d�w�\4��*�/8="�����r�����Q�ҀO����ޚ�"�5�L���A�;s�Qu篙L ���Lѐ
��h˛�f�f?>�&7�oW=l��faH�O�������4]d D5d�|�����j�ق�=��ST̜&(�2q�6N )Xh�D6�2�T�~L�
����Ij���g���D��b<�c�hr�<c�[�{o�9�P��Y�E'}���W��q�4]?EDI�34�����[�;א�X�����O�Z1�,=9��V�|�HmuA2�mH��9���8GC��jp��P�hdp�2�r�v�8�v���f�l��hͣ�&|���K�S{��G3���%[�/�ǫ���<71J�iM'�k�W2v��'E�d?�����Gk�_CL������hw�_F������S���5%gVV%�crg��H.Dд \��B��QW}>�J%�6�kc��I"K菔�h���JRԶ�H;�X�A��v��C�����c����P��wǂDB	�z�4a�(RD������9 +oQ��w�qO����Z�4`E9.�-K�4�E�ѮYQ�����+�����6�%��;a�IgQ$��hpŵ��guN�G����;��>����t�Ni��(:��P�x���N6	r��Ï\Yv�Ʊ�M�`K�m���mokM��ۀ�|D��lN�C��E�Wv�s}���T+�(W�Q��E��z���h�ŏ�����k���������SF[�Bӆ����]��)v�x� �\.B#�\���b)`��l�� �(r���?�l�K*\	���2�~�n&�6�.��զ����p��fzGH^$�ƒ��g��W^R�l�k�.�����,�\����\��X"��ǯ�ig�3E/tŌf����*�9b��s�s]-r��n���i�R��ڃ��������װ�=�t�C��6`��ɐAzt���軅���)��~��Y�Y��#�������E�#�ȣ�o�@�ߵ�pd��ޗ)�h�Y9���r`^ev���֥�:�4�7��CPe���OY,����XuZEEn.DZ�`���=4�`K� 8���ǹ�;���`j���y�$i��zl�֥��gI6��:�
j��p���D5�F@���8�A°k���U� ��a�r�l�(@'����eĖ�XZ����0�L��Þ��p����h4��W���0����h2>M���qg��t�����ag0<h?��c���������cq+��(�����w��z���1�Q���g����?ﰔz����y��׀M
��wE	WP��u(�2I�Ș! J��$^�Fq2a�^���E�Z I���KbE}l<ՙ�#4a@OPK���F����3�o�h
BBHJ��[tcoq�L�~<�c�FbA8��J��s{w�>�G���I��5yT���mϠ+2�&�*�d|ب��Nvm/����>���a��}d�m��p�� y�a��i���YH&4�����$���@H�M�@BD(��A�x���6Kp"p�3��Q�,�_74)��1�����JT�%�(�-a���v�5�ou[=\e�	����¸�G��IO�����"Pt��-Ό�~�7��y�AGY��̍%+2���4�z�!�:�U��Z�[�ͪ��������d=�2߱�Q!�%x�E��>���]��Nlh<�%P$	�17a/��4�ErPڕE�ҙFaT=�.�A� c��P��IR���|u�N�9JlN��>�-��k+� ��]���Ð���9
׍�P��h����ҹ�2������%m�fp��}��k#��*v�,�gd3D�&}�H��9�g�@@���s�g�yS�7��K>��X�&jr�W���輤3���?�i�|WE���Ó���kW8GH>����_)�)	����U�*,ǋR���9�����D�c茩9����^q�J�Q��Sj��!Z+wV-xj�7! z��:)���n&i$�9�n�X�h��3�j4�衽�����<�����kq��}�6�lD� �!�2�"�b���yjV$��{�[�h�������1�}�SZL5(	��Zi�6<
a=�r#�#����Ե�����w<<y6�Ǚv1Δ�g�1�!��DA`����-� m��68��z�G�e|�ٟo��t����<���:?��/~ZI�(��`�������-k��Zx�G35n,A�(�U���X�h��z���a��
����<�m�(r��gzd�YT����
�	k�~F�C����Z�����˒a��Ӫ�37��r=�Ru����[\.F���bnf��~��<[��5^d�,a���0�@�����N����8�bk�߯5>�)Y�>ϬM@'�ց��:�~Vs����oȰ�<�����Ē�������X�V�o�	�� �JU�i��8Y�6�(Q�|�Z�9 P�ts9U��ъ�Ͳ�M1�H�����f u����o�W^���T�k���]R��b%5�s"�-���8��v
 F�*��,��h]�K�xs�5��D����: z����fy�=&��
c�kXE|r,�Y~�C����0X���P�e`y�0`��9���o�u:�����.�~�?���a�낌o��yp�
��h�c�
e�ݮHL�{7ʠ{���&�=v��+�����\s�-��!���D�f�*���Y���������N,�4�khQe�mӶ�u�D-q�xz[�[0��32��k#h|B/�r����% A�5֊��#pX��J4�^�2�ix�����P�U��d�ъ+\-#ϚJ�H��L��CET�d�2���'PcU��F�u���r�H8��K���3�q]�wݣ�8�����{DX�ۇ����w�oSթ{`Pu"�_�P�2Л �F���닛w�͍�u��B�{��j��X���+*��8��@��{�赍�dǜ�\���P~UML�>��#��j���='�_����L�4Z�6��m��� �(T18�A�Pf���K����V���/��f`���zw��ʯºŲ�~kc�E^�7;'�7�����M�����N���UEu�}56'�2��]8��I�lC��"]G���F�c�����D��0����Jû��KG��(�y���i�	��E4    �>����&��W�.��y�:�����:�[�aw{'�52~�@ِf�rZ���	��L�(�i��Nb	Z[-�u���Y��td����\��0�1�T�����`���Tp.<�"ظr#@~MkFhsn�iPu�������_��}j�I/ �Z;Z���:V}�Hpǧ�2�� ��\r:��6M_h4����Mx������׎a��B����q4�\UGt�+��Q�o���tN�w���Z��@���h5�#,�r��.�i�&�X����"JWsz�"Kyà�k��8@��_z8gtۍ���w��=�NR=<vv^�U��B�]�I�k�g㒢���b����+�õ�߶]�-)�S�+���٦��V�l���I-0����9��N�.[p8����ɏf���s�6V�7���QS�����4�ecU0�/���) }F���BT�U����$\��bm2����ᒡ�Yo�l}��,3Gh��i {`M��i�6�'����OzX��6qA6�
�B�,*�2��������h�8�	%�����|<�t?ǂ�%���2p9_���h$�([�˩�b����Yq���X����:�*�?�wBV>ȴs��t�C:�6�2�h�i�K�/����$6�(E;ٔN�;��ݔ̧���ًJGY�~�&ͷ��"�)��P�.?Ț�џ�-�?l,�%u.I�4�bgv����w	Aiørf�BP��P?!X1�����22r�F��*Rg]��%T�s��'aq֤x�e�,cM�� �,�Y�<�wbqn�2ה�Pb�e3�.��L]);�:��YU)�$#�cԉ�B�h�FgD����P����=�S��!j?l��{�ਥf[����M1�X&(?��Q��]a��7�
Ж�ڴַ˜�ǿЙ��B����k��Lx\(ϲb{������6�L�]H^�Z�1�ۼv���z�-[#����u�Ri���ga����3`��ܒq��ݒJ�]L��r}���}K(>�]�|̗�U!IS �9r���*=	�\>����LkNNHxrI�{kJ��S!k\�? �-�N"���s�|�lwO�R����Z�Ա9"�g�T���W��r�yM�v�y��B����*"YW��Ֆd��������"�X@V�d�6����4qn�)S���I����T��-�z��8FaQ8���F��&-4�i�q����2����-r���ݲ�ծF�^Ǎ�~��C�b�*�=��fu��C��S�����h� �k������j7)C�b���#Ԉ�V-r��U��`�Ǖ^���~%ʪr�.,b��T�B��sg�`�&��C&[A��<3���8ι]��-{MŒU7t�n>���riO�:zV	��\���R��<9��v�E�k�I$V�TA��;�Ec�����q)���w������{"��ڙ�ήH��LZ�09�N�${���}�	�	S'�����i�G>g�fo���n�{S$f|�B�V�ӌ�u�e��E��q��ī���f��������K�V2CR��Sc�yp:ˣ�(��x}�2ݿ�I��1��j	^f� `��_�
���<��+Û8��m��e�����țcbcRt){��[��w�����N]�1����:0�Z]�X9���	��OhpԂ��W�����m�Y�.��綝&G��ʳQ�/����gCKz�(�G�a��U+TM&�3�v��ڣ.��"i����Z��@*�V��xl�kq�6�;H�Em3-�u�~����R��EKw����5y+*ۆ���"!m&�1DK�U�!���5�h� g��A����tH>�v^�xu}��ӷ�ٛ������?��_kx��O؀��K5�f3d�V�g�2���2�%#��R�u����h2R�)�edE���E8�%�E��p#P9�(�	xf���`Y�-#Oc�m 0�����Ho2�V�����6�k�w�I(D��V�;a	Epw	'��/��׏���b���;Z�
�k�R���3l���A�iku��ʹ� ����&�����\n�1�k��-ܯ�'����ާ
��I3oØ�Q[O�@���j��_
3�M)�	���f:���f5�3�*[�&�ZS(Ue��Mz��ڄf�ɸ�D�1YN`���K�
7i��ߦ���$Su�X���C��>WMG��d���6��g5GSm7ק+�K���c��x�d��O�U�|�E���f EcL�����Q^�a�!��cZm"�R]�u�4䬭��6=� ���C�χ�%[$��:(��:�ϳ�Wh����F������'A�7�7U#�	��t\��g2ԑ�^W��td��n+)j{J�E�(�rZ�2��;���R�����/:��<�p*NĲW���!w3��Rw�d��J㒻��Tfح'ѧ��z�\0�|3F����.�5"[e&
^�w45�N�vg$1����|�8�wEVnɃ����1�"?R����/�RX$}t�2�?������/J�0o�!�ϟ�C�h�iA��hj��h;��~D��rԊqy
Z�����J���+��I0<�I�/9�Z�l���,���p*OޖkV!=x�X�������R9���w^��"�|'Q+L�9�l;�E��T������	m3p��U��$�齽��3�� =( ?#�H6���Y����y����X�C�n�e\,�Z/MNG����2���|����%�ٽk��U���������� �����{��|K�k4 ��V��b*��7�(	�ā�y����A����ХU�U ��&������3���L|!�e��B��crz���\�`�|o��y|g|�,(ړv����]���,�~�^|.�����^8�Zs9��;/���|]˯�y�wCnb��nx=����zmb`C�PU�wC��0�y�&o��eY����\p�y�X{��C,nrQp�hW�Ԅ�'��s��U�����:�n�s]���VՂ�0U�����"��rSz\�����S؋��8.#�#m���R�,�������e�5��R5".�Mp��x�]��xR�
e�=^��P��{�&�s�Ji�	 v����Q�e3�� S��B���da0M�f��RhK(�y�XX$g��_u�6Q�6M�Ҏ�7.lu��
��O�W��X,��;x��/"5(=�_����&q��**�(�����kN��jp�I�Y
�t<���d�1�o����h��B�4�-�$ 2 �I[���1��xF�������%���d�0K�j\��t�L�	�d������k��>9>�m�r�F/-:���Utx��r��vM��&$pb��g����Q+��v�&��.�k�)�'��Yt���F���b"K�-�GPw�BdP�x��9b��� �a 8��8+���u+��8ӽ�g3��kE�2q.�X��!��bIV`������ٮ�����D9(�aJ��/N;����)��A���J�� )�c%y~eY$[�j�c!t�b$��fg���"���B��>�������&Kë(�ޅ	+�]B}�I�w	�]B���K��ի@�(Mwx�)�MfK"��|�ISpym�k2vH3\$H�^H���m���JP�̣��t�xΚ��G��^��)�ۀ��.?7d�RG9��3c-tf��$����)N"|��2�$�5�^]38�²�k_X:X�U:U�
o�Q^�D�v"�X��l�1���#��@u^(���֓�IKt䑤e���5�/��Ð�j��P~fƅU�h�2#�x��ͪ�:��_�4���,
�@�5���k8iq�6�Pkz�	_mn��7�^�o϶א�U*ͽ(ݵ-R��:�|�x��â�b�o�YW>ޡ��Z��"54l\���1Q�sj<��>� �G3��#��K��V��`a�%���N�ian8p}pOFFP��K�W�l"�:]����.����z�=���;�����(%�=}�p����[��掷`'}o�{׾a�;�S����RX�;��~�V,�Hoޔ��P�}�q�� s_��y�~�Ne[�1��K��4�P��j    ��vJ�P�
b�C��e=�c�w"�����7�Ū�صW
7�sٴ����:+�� Å�ڦ�ݔ6����L���"���ZW:
F �#A��,��uQ*��49��O�Y=��G�q!�L ��u�=�$���-ʺ"5m�;L�z}�)�Uo`�V)q������H��ߨQQ������о��eda	l�i�i�pB]ru,	����&h�|,aڃ e�ݧ �e&�,��3ni�����dܙt����]h&��Yx�4I��K�nV@K�f����e��bX�_#c�zG�����9-�5V�J�i�s�uo�!�w�n4��N�B�þn.�z&4�n{�Ix�k/�bm("�6S��2��a|ht�=�,���9m��O`��߈�.X�49�:�kh�&��d�*������Z�&�)�G � �ڡ��7q��R=qՕU�3���}��e+es���'&��M��+K.�Q�F�721s��,�ë����%t��f��(a{Y�M��q��鹸��	Y�X���^���Դ!��ҳ)-Y�f�9 zg�eN��3�o�'OR����<f���ش}� zB�/�Ci!D�C{�E��=���RxTeo��EF<y�gwiq��.x|Z�c��N4�;�s�4pX�dŝ��	�G��B뀱���4�8�ҡGu���w"�	c)o�%33�w�H��P�r Db(�P����X �B�v�ݵ6�)�@ �]v��_}[�pM�
��(��O�/[�����k�zK&L�%d&��mO�+�&'% �=n!��ke��&q.��|To+]0�hޢ3�^y;:n�_{��񈹔������'hS�*�)��0b��
ѷ���X��+�*�v��m����(��E���7�s �g�g��1�0�q5�����)�a�,}�&)�G�%$��ǎuT�L!9Ҩb�;�\ �e��N�}4�M&X��:�ث(�G5[���NCTan�2DY2��r`\K�+ ���F�:au˰(C�%���a�l�Ѹ�;u�F���(���.�
����V�M6O�ɞD�U����l��/��,���b��ь�ڶ+�v;U���5�tA�[xK�Z�I6�-�����4f#4o�R�8��K��䶯���\�[���̂"�jd15QN�U4r�<��r�'�VL��' ��_����jL�b���CU���f������� F/7�f�i�t�K��]�Ո֫�7���1�,;Q�6���`���btg�,��Y�N�ZIfY+��cfpC�x�d��9�-,a>���^N��f�|�"�dWi7��M�a��g ;��w���b��D��砭C��aѨ�xL����+�(3�����;��k�1-���,�W馄�.:��I(�J�z�GR1�C�4Ť�B�⤔�7��YF`>P|t����� f$�3.1�D
��綃�M�2J/.�{H�e�z|%T��)'L>'^9�����R+ͻ��1��`Ah���s�Iz�(��ee��^���'�$h����O�����7|��� &7�n	_�p8o����v���.�dU%vJ�{c�����As��q�K�ض���2���)�_p����ٴiV,tXvS5"��H����+���ßƉq��%�J��8�8��.[����I�@�T�ٷ�=�ؒ~LN@�_����*HW�ڰ�Ιl@n�B���6e�c�� �\�C������#d��PֶU]G��mY.�7Z@�p���d@��v稽��ni�ޣ��XG�� H����<�L�kW�c}������r�-p�!��B����3:J�g�S�02ɽ61��ty~��� �g�6���|�KfK�¦
t�nޖ�&�c>�d�8���V䔡��jZ��76l�I�J�Z�8mLS9����)���C�Х��8t!�t��d��ܱG렋�P��k�6^��p,''��U`�
Wy$��@�q���=X�L�����2�wN��;�1u�6a]��"rѢl<��> �͍$�W�Z54�����Ə�g�$�,u%RMq�[V��f�`s!_ ^��OpoF[���D3�����Ef3�쩹J�j(~��ݐlA���0�)z��N�C�|)�'�^P�ܮ����_�-_D�yc(���saV
3Q΅/6$�Ť9_:m�
 w+@3H�@Dz{b꘻��&%���%��Ch�x� .�7����]޶ݐ��g�����xM{����>.`i�h����AE�I��چƱK<_�����dW�O6�57�T#�tk��X���Ig�l�Z���Z��U�k�0��v�7EnfV&��q
�hS+Vf!�"�jr�GLA�`���]�e&-4;̞�Qù#p���!��܊�Mƹ�\C	���޾m��,��Y��2��
 %�)�QHP�T*S�TKYY@�C*R!+��L
�A������0��h4�a��<�h�q����{��ωA2+�F)�dĉsݗ������;��8.�:����i�3�Y]�=]�q&}`=w��$����>�.���<��q�wu7y}��:j}��M�i�@�
T/۵�:����k�/�s��ôʝ��]�ʎB�a^�B[m���J�gb�OP(���K&D�_&��PX��m-�XW�m�R#<�@���v=�l�}��}M\�,�����
�����f�75ZCr\���2�NY���L��.�E�˘��G�p�m�0��*��Ի6�¨��D96P~��ޮV�D�;O����M��I���/��?u�w�}Y��V�}U*5���OM��SA�O�ko���J"Q�S���8-��m��\�<)�Y�=���vٝ��]V�gi�p��c�.IV�j��*q��P�L��&��ڬ�e5�pfc�jv3� MJ$�����M@���-�V�n֮�4��J��V�	e�������P�v�S|In���+P���h�t�z׮T0^Ѥ�++�u�U'T��yk\@��8�-����wY?�߷ �aE���˳�R��	U
�4�j������
c�7%Ţ1#1�1/X34X��(;�\/���O;��Յ�Y��y>��q�Awݮ�io�rJ;aR0�n��B� T
�H�Ax�S�����|!�#����̬����H`�z�� ��ke����3��y��;�U�.����6ZN��*W�U-��5�8LY�y����J�-U�C���/�{<+F��l���n5����dC���6�o���xn������W���%&�6�w�W~q��(x��|���T�L�5	,W;s��2 ����i}.$s�� �J�Q�T��e���=����ݠh ��{L&y �U����9X�;��I"^0�T4���BF��W���c�7
#T[�ES��-���`�51o9l��{My�j"��������&Kp�NyR�i�����R�2���ЯF�����޸�o@.:I�A���K��;�����Rw<���|h��GM���D��fv(J?D��g�����t*� u�W�SNԬ>
33)�mQ��0��9���/R����i:w;��,*��,pj+�MR�Lw��&e=d�h��%�3��±�XLZ�b�[�s:�M�mmGE�����)����<�0=���^��\p�:3:����l�L{W*ە?i���O��Z{�R�&)�e�g��[bt5�Q���d�5�[��w���|$eh�����zz��z4�!:jlߊۇ���Vl��XN3,���ku*\�C��.��|uL��(
���#�4�.�X��������A�H��p�����\9,�W;	�ۓ�^�`8�i7�����}#�ߔP�Fy�\�WX��g4H��s;?`����T�8�3�s$�ԥ�~�j�����XE���CI�Ĥ�<���Έ'�y%lo����5���o�p��aC۰!5l(�aC۰�*�{��xl̤���w��ir0i4�~sϿo}���.�5�r�:�[���]���?���?�i�n7(�`�tlw��k�����H�V~�U:l˛�n��Q�g)>ĩ��OY�@    3�a��f�c/�� �qt:�oM'(̤D�� �����0x"�[r��)Me���a)jd�O ��y8)�siT)�r��e��w�;�mі$��bk��S�aZJ��t�x1�����G.�Nt^�qq��-�*F�5He��2n�f#'
����O���M�E���i(V��Z�<w���/�5��b��
}qA�.͘0f�`-Q����Nk���^k�����{7�^�6�����x������7�/�l@6�3�f�3 ��|B}��? ʜ���ӟS��\�����u�a��.�N�r��x��&��\�#�<>�\h�D��dp[��	�5LO8bz����S�4v�esd�����G���:�+�q߯�ڇʽh�d\���뿅3�NP^\%�`�B��T68f�W�T����l�'.���q��$�O��3��Sݱ�HC\ު�z:���B���i��%$z������	sdnÇ�@eq�0q�b�N�i�Cg�}�����8Nrĥ�K>f4Jå{�!f�g.zd!�:�*�|*�"�J�~xJ6T����^c�n�Ʀ7��7L�ߘ���^�5�7}>��~a;}9�����Rk�vA�jfn��}\�Z�/oX��>ɫݑ���1��l��%�g�E�@���~Q0���4ɭ�'ڙ¬�VL��xF�A؅8ӶR��Bb��b��/��α�Z�@i<c,�C.ݴwVh�2����&�D�O/��CT0^��9��`�a*��<V�	 Av�|�J,�U猔�-X��ϛ��AcI�w^��;����������:89.����o���J��\�;;���o��� �yst}�~����Mpr~s�����w���mW�H�d��L�k��jt:��v�59�q�YW-T���K7֭�O�~{vo���� 󂓗d�����Z-H(�ײ�dfuv����ћW1���N��w��j`��Q�T�ʕ]sN�uΙ:[���[�Q��J7R�!�8�����6 ���#��5��+�[�`��)F�;�R!d6C�UZK(�e<�`tAޏ�/���P�o}D�BO��caW�+���@���s}$#o�QH���2�I�]=�u�<Ꜷ����z���lj��Y`7*����DX���_�������)�p�N�F�S�T5���O�TJNm��vvȾ_.�2�"A�����͞�aC,}S��O�3��%M�����尨=�|bHͷ�p����d�a5Ee
�~Y�y���1�t�`s�,���VO|ru� zw�V���9��N4�7{��Æ��#�h�B���h�W���C��w������#���������p�x��ߍ��F:���6|JY��Ddoc)9Ƒl�L��d�g� W<����Ŀ�x��}� Q�Z���$wt�_\vji��6V|�K���Aɝi=c���� �R�c��|!����J��u"� �����BRr��9��m5T_���_�0'�;[�u�4��)��0T:�F�I"ɟ��>�Es�i��jJx�;�V�I�l���ڡE��_w���+��jl2b����:
0���LA�E�/��j�d�ȁ$����W�o�`�)���kBr>�jV�(e����yq�
ö����;��"E���i9�=-�4(�m:�ꂂIͽ�M+�,y�=k�稤h�85�*!�:��Zbn��'u��	݉�amS	Sl�E�t���@c~��]Nr��b�d_����q�,њT�QIAP�:��u8��I�,F�G�;ݻŭ���]�;���'k�^J���o��__��3V�؋Ͻ�q�wˍ5�X'P"9�6^�PҨ"����/�����kMMA��*ͧ{T@�m`�J�j&��q�"u\�V���
���t�g zx� �.��._Y���v�����3̈s�ք����"<`�Z����,:%	(���a0�K��av�p�1$[Er��*����M�MRSQ�k&�^���k���=n�0^��7:|nSv�?�����x���BK-��#e"���S�����+!<�\���E�>�������#�����k��Dٔ����B��� �����	l?�VR�ˇ�s�W��D���nj�<�Zim$�m�yY��(�ZĸKq~�2e�D�:e�0k����;c$Cb��Q
C�� Zy|�X*��-�Ҍ��ݿO�~~ʄ�ǫو�D���
�̂l#:�#�]D���L����O��8��Ղ�_].�VG�I\��N�#�u%���kp�zi72�q��͖����eeY���|��A���d{��>t�p8���Vv��v.�<}�3H�E��������9����9c�G,�\�c�q�#d����:ϲMEI��ʴ��5T�:d����١�m��|J����0�hύb#�G
�R� 2d���������@j�F�l�kƲ�!�n�+���2Z���x����]�ۥe\����MV&�X1�{T�ЛB(��{MKd�o���	z��G�
?t�I��<�K#���c���ƿh2v|S��ċ�h�y��+)YgM^��"����$ۻjw��0z�����S.����l|;2�l�,�"�lv�7^c(����d:C�����$<=$�l��}����HK���v�L���_2��	�3%G��\#��dp�
��~0��ػ��z��UP#�b6k����J�^�\Bt�m�$���W��jxPK+�TR�`�Ur~7C"�\a���8�2 �����uR�fF�dKW"UΌ��Ht&Tj9��B�����$|�<�D�m�hפ!um�9�j��mX�'R.Fn0��F��2��b�j�G��>
��;�^���5lN���;�dM���0�uj� d�a��!����ŵ��/'�M:z�K��ʆ�t(���r�������R<��p��n�a^�7o^�|x,�w^`�^%Y�Z�Ъ]������m+^���a����s��z|Z����\'�+|^�6��Q��b5�N�kT%X�v֕W�>�#��&�u�rw�ˈ�|>�<�"�j%��}���4Y�����{��R%��z��UA�0�b]'L�b���
���Tqٯ(�Z��_���q&gml�N^�AK"��$C��R�d��_*�PB;w53e/����mHޛ���
;�� �#�A�z�*Q/�.kr z���ۍ��_�jU������>8Xl���t{����N���%M��0W���5�@����-+�� m����i��yn�+#���"�?�}U���*U�
mѩ5�*d��� ��\�� �fN�g�P J�g�XG�
)
K���Y���;�07<�yfl��3k*������*�G�4B�k����;��p������&s2�*H)�F*��z�״`�]�U?i17�J�;s��bz�)��������;V(�-ޞ,(�SˁVY�c��g�ׯ*�hQ��l��A����+U��;V�ݜ�w3���5��|� ��k'����v�w��j�q��p.�5����3l�d��=R5�i��Xh�q�9�x��D�Oò��_�8p�:��(,���1K�
��/�b�(����l�HR����
�G�T3/����y��6��fS2�TN������b���Κ�Q��^@����/-�֚�傻��#��B�P��u��税��-��\^��F�>?��"�X#�ت�,^[ө&�`���V^���}!|�l�U����T�4u�og;'��w�l��͎Ϥ�_�@�p�{�2�1%�P�X�8�&�,�H�7�R���-��B)�y[���-�5nM����_��*|$�ȕ�RlYý�k�]��dk!�)�qj���֑qAD2ghQQ����"�g�޺�����5�";/��'kPQ;�u�P��6�֊2ɂy�F�i=�ME��~�8���� waM��)�5lܛP���Y���Lö�X:�B�s�d)�ZN,HA���d�<b�`�g�>D$�P����	O9���`Ođ7�	Va'k�����W9<KM��������bIõ?/��������vx��vKZ���~)��]�8��=;���R`�u]8g�RG�X�����    ��Q �sA`����5��-��4�AZQV������rI͉�&�5VwT�z,1�)Wt*a���+�|��TL����H^#�=6�l��u΀�J�� 3��h���)s\Z԰`��\ޫV�=�geWL���#��1�#=f���{�0��m���ǖe�L_	��G@��?��Ӗ+84'd4a�]�=D�{ aeC�nvȷ�X��jx�YK���2^&��5�����5=A(���ZCE�[��՛,�D��@���$Դ�c� j`����RP0��0"�a�X���J�sؚ��'pvb�r���Ґ,������7�烛=0��'B�*_�?&�ڛ���n��VK����k2����/��m���=�⋘PS�������<�?�sX-Q��C0������
w#����6�:����ޥ	�nn�7.|EΙ��)ƚ�BnR-�&��<��Y퀾HK !|P�,�u�ku����<��T�X|�Ӕ�d8O?��6Yg�6�j��ΕpM����x̗���)^�VaM5wD�����,�*���� �xS�s�ї�e���ltZ�a�8����8��ǽ
��1�V�ep�/�1NO���f�-�&�l�v����]�Q-}g@�e�E }?alԅњh�V�J�ΰ�O�{�h�4`�~�w�ȅs!���hi|Z3��`&�*+<q���H� �pd�<O�w��FR<��-ad��jS�ˈC�����#��ݳ���ݠx&��W<`��P�U�k�Y�����6�Ϲf% �!���N�Y�l~�i�q�5?>Ʀ_Eܷ;�N������u���<T=�&sh���D}���V_�3Shq��G�g�4{�^�Cs���*XC曛����]��j��Y^?�_�K�>}w�.���{e��Y�ӻ������V6����_���,������lp�]w�8mg7��������2M������w�����y��<��xy����·[Y���������M��lv.����b?ΦWizv�����9=O~x7��؉߾8�a|��]��:�����?=�9�X^\�ߝ\����S�9��<��O���O��Ͼ����������w��l�͟���������O������}����i��v��?�N_�8���4]�~�������~�tF?���������Y��nn���l1�|eV��0J��oW�//޼x�=;���>z��q��҄�:�q��GB��넬�M���3��x�����/���Hc�le��?�Qz�83�����
@A23�f�$/x�"���W>����048O�uz����z�̌$,1��������xI�k������*�'����MQ&!���F�#���D��]�ȑ\a=/���Q�u�J���qY��O�����7�c�~�j���Cq�ؓ�>�Ǖ�6f)��dROo4�'���	�;d��K���;�i͒O:�� +�|�e�!I�0��n��L؅#��.ۻgn
��8��G�)ߗOI���;�C���/���noSf��O�_�X�%�2�ZK����.���/j�Ӑ�����3����X�56_
�.��=b~���y�i����;3�Q�V����?_X�M_p����dIj�1 ��P5$dVܚ�3���Tv��07�Y�4&�	���Ė��c�4���!�K�D	�����0�S7]}�O�tc
�~�3�X-`v�$T�D���9vLP�k�&�z�V�ZJ��]�I����bnƴR�ܙ��H̦IqU���%��{{�t��dB���DH\@�
��/��t6��ngX�o�Z1mӼ�Դ�k�4nڐ�6��[��61B~g!S�4$��w�ʲ�b��f��A���x���^��e�,-D�@<B���f	��rH����
��ZH���ᆳ2/����4}w��� �3�FF�������q�W����F��&UA����w�e3�Lj�A{s��k)}u�Poʲ���ox��e�Y�	h�?��D�������е��p��.��d]�������<A(���HTN�I�rm׀�D�D�jQ�N���q
Z8�����rW����_Ǵdw3��IgQ�RjY���c���˧��5�/�a<Y�TW Y�����;��"�Q�Ѽ�M��i�����?l�}P��$�x#w�- ��3���f�$�^�\I����ʬ�L���]<��~V5�R���J����lQ��k}d�ɫ�3�ՀXP�`�X��fz�7��$��R���,�kV��c�(K�~-��fx�;�H|4����"�s���K���q%��
H���:�ݩ@>�MM{����@��(TD�����Eohe"l(��En&����M���
��*��cm+�4�M�'�Q����H}�\q�oE{7��~��i�7���A���9��u�3o�x_Ň��N��8ӄ�F��m\�4�$�GMۺ.������k%��f	VAA�(q�&��4�| ƕ��R�c��VE�}�	ꦲs��W���g&M�DX�0��kb[X1ۺ(��+�Lt�*���(�j\� phɟ֚[�=F�x	ʊ�/�K�X�%k��Za�t�>�1�h����EJt�5U�ܖ�@(єL��d����ބm��ˠ�E*a��CS�g@E{�����Ȱ$^p���L���U����z��o����&���9�M Id��9m��;?������S�s��n��#��L^�)���Z8�*@e�\���31�'3�/��lٓ-`z��C�C�T���a�QI=���f�b��nCP�>�:<��VĀ�[�KX[:����3����P�O(�`�QG
d�qUUwc���qYћ�c¹"���3�>������'rT��L�m2���O�c7��C�&�ӕ�$:(�ҧw���+;"������^��2�C�����ܞͅt�rS����G��="RN��	���&�sL>kgOu){L>����/�0]G#v[��1Z�$G�OM\,z����1�?�%S�4G�u���O��_+0vXV�C.c7%H��6F"x�!f�\i��GX|uy~�����׿ܽ��na�6PJ�;��C��P4F�R�
�J���
�+*Q�a�|�/m�A�ʨa�z@�O&�[��u��U^4�%Nھ�ڜ8vIH(���EM���{��M�e��`!V�Z�k�k8-�k�`�:���u���M���+F92�rW�1{�ftW%���� �y7�>��#Z�*g\�������'�򖜠�����4Ig���N>��Z}�����\r�O.=M�Sf^l� iO?k�\\U��&WN��4�PVZK#�>�Qj�	�P�r/�1����d��Ʀ2��PZ-& W�f`>y�cE����^��������u[���'c�Py���K��Js4[�}�a�q�Ka��8&����Q�M�J�$:0���b������C?�3�h>��-����rC��+R:?Έ8�;���*8K��[h���de�Db��	�5�`y�&��6x�)��'�1��`�p5Y0��W2	��K�\�N��.Y���<����Td��i�8�����[ݝ�|�ʈ�. �f�ȣ�7�M>$8āu����kp�"�+��MpI�f��+T!���#ד�7R_������8�%]�D��d�).�	��m`�z���k�e�:-�>�s�K�A:�Sw:�:�UdɤTJ9��j�xE�~�J�=�q�}b'_���LO$a��ov���<�ԯ)�}A=���wTP='�yV�N�h����rp��ݽ,e�ʢ"� ��1.N�y��4��nO��g�%)�xD�m�>��l+�ǯ-�`t�,<�T%�ji�I�h]��f�4�O��k�/��%�5M�m�נ�yU\��3NTѧ��ӽ��+��`>3q�-����.!�J��v��k����-F�x�Z<�Z<D����!7�q$�`�X�5:�~��k��M����z��d��?����{R�{RO����$�`�'	��3XO�Ky��F�:|L8T9A�-��Dm7QI���W�U{�K(�wf1)�X��؁    hCέ*N�ɥ�&�5<A�j S��ǰ�S)W�/�я���pMvx�B�Xra��E�#fK�#�d�T�F蟭^d�ƞ-尢��@G�ܙJNp �I�w��߰����KjLU��l�$><өf��'�5�[*y����yiR�`�˔�Kq�.\Z�3�x?mC��6�1�{�mU��¹R��+�X����.������z {S��ͅ¤����
Vg�؜�]����k�h�x�Ə������r0�13��f�~�{�%�i%�t �X2�����DKzJp���mN����mB��4�}-���P	r�:ODp�����&�X^i���ź��G�}�)HC�Tf��Γ����Q���?]Yѝ�'�%Z+��� ��t�K�1/�Bw���!
�M *��Ss�`���
+�2^cK���G��e�i�,�A�Gm��,�Rtr��(�0����OD>E��񶴣a�Gþ���C���\��	���p�="g~�"X�E�p�M�P����X4 �0wB���akAĤ_k�F3�DFڗ2b�a��sykM����}��p��̨z���񳇳$���i��~>���e�9�h:�������j��a�`㵋{��q"9����$c��K�G!8�C�Ly#�{�xQ#s��d���}���1�,�؍�$Ý�70JF�aDu��:���g�Z_�[(��(��|�t-��qU:��ђ��6W\Q9�g��g��� h�sW��n�҇��S��Ȱ�2�3G�s��?o���r	�\3Ą�e�D�Yi� 2���$L?DV�MlP�h��0�a�Χ6�_����zq`t�6W#��q�@`�c9����-��p~0#ԛ��e���<���~B�ᇔ���E���l��syӞ 8�O�Q�R����!��t ���&=6�O�='�:���ke>�A��d��hVE�r��<+W��B��W�ꏒ����Vq��F<I��V��!2���P��l�+D4W<�������8�]#Q�hc��"�Ɵ^��v�W+vP����~˧Rq^�N��G�.�B��稜�+���A�Z�S3^⩰3<���n����7�S-b�8h��옛�� �ɻ�@�2wr�p{ʨ^�Նh7��-a��"�7�ńPaR�ٵ�ေ)�J�~m�4	�ܶ���k6����/��@���������9Ek'����a!�o��GtІ�'-���w*�i�	����!�nn��	:��UT�8�b9�b��e�K�G^�g|�^���Ci��:{�
b�%��x7c�3	5���I�%'I�̒�1��oG/Q����y1�=JhGK��H-&d[˿R��|$��O��_�)�^t>�f�Gպ
��������l�H
:|lORQ��0M�~�D�̾�YL'����@�Ɛ$�����)���~�����.z�!��6��(�i,�|��v�ճC���<b���T��W��JZ���{�V�K�6�J�r�:]�'��l�㉸w���Gt$�*�����6�<�г�e�ʩZ<۞Z��@��[T��e5��j��`��AF$�M�QB]���C�`��-�]��#
!��h��qp��zP?z��`� ��T����U&M���$�șt�g�aQ�D'$V"= k��+xH��%`��&�vE�.Z�R��֥=Qx}
��E|�S��n���41�&-ֺ*	p],�dr������f�o��(�����#�¬ֈ�)��W�x	r1�9�)~O�Y�6+�*�V@ҩbD	����ZO���o�TJX~��S3����:�J�'��Yд�R��f�Ƅ���$��7O��,~5?�ә��&�J��o켣N�"�������ri�*�@As�r��%��l��x<�����,�a���J�@��K�\(B\����;w�[��[�P7�聉͕��EIԀ( (�
�Xc0��fn��Å��}�#k`���֠��e��2�fE+�RnuDtO�^�2&���,���Cw��_�}�r]��G�k�#	�H)\<\��h�#�#��.|��5�8��E��ͮlrP�J�t!ig�R��zӀ8-�}�v��hd�B��'{ �
�y�Ӻ�7�FO��Rq{�8}����Z��f��riiyqw���p�jJ�Up3�x�8�=��,q��U�;�t7^;�=S�c\*u��zl:��ݫ�W*���ǘ�c��y�"0����N��O��FW�^�i���
�0�t~j����S�nv-j7��hRj8?)儨ܡ���έbj�'��:�a:w�'�|����j��+�}qO�����\h'�EP�o�vZʨU�3Yٌr)i�<J`+t��pz�bMɬ���F�B:T�3QQ�fT"W�K��v[�lf��BS�;�Q��kz�[ؼ�_��b���R�$�%Il�A�c
�O�L���wifj*'�?rB�1��|� ���$�)����m� 9ũ�53U�̓a���ǀ����?�%>����9��vY�-xm�v�'��]���� ����H���1;���4���<���E���]Zm���a:�e�K�z�FkD���&��R�1*F��1�������}�a���� E��5G+�u���OY�:���E��,򡥉��D�yO��ɬR����������U{<�.7��~��j�{"b��L+��L��M�(+f� ����^�2᳚-l����|�'�$�c,�;��%���u*3�2���c����l���Y=�v�R���[X4��(l���(e�|q�����f��ٛ$w���.ڣ��3���,Ƿ������A�<
�#}�!�7Ù{K�F��c��7�W��l�?`\��G�ֵ��6:�m�Y�&U�ɉ�&�µ�z�ƌ�Q�c'�Ǻ��N<���}���wP�����3"���Kiـ�@3ҏ���Ux<�� �d�%���P'�q��Z[���z���6��5�Ů�@��E��rÓ�ZP.-�O�I|V5��ϼt�EUK�W�~X f� �/*�t��U��4o�:ޒr+���sǨC��}�1M�%8��d�N�%k.DĴ��&�̪�R霧?�όcq(</����q�I�����0Oi���[8�'�yh����N��f��g���5@X��j	��]-_�f���ؚ$6��]�NE��V���Q�B�_J���d:���C�����q����o���V��\�Yb����^e��=8�v7^�S[_6���M�p��\p<t�o1\Ìɕ��_�72�<�"IYZjyH�)��sP��J�]J�����1
�ѡ"��,�Da�	*�8���8l�b��Pd#�TbO�c�<h�xbk�~%�r�2ʁӿ��B��dԃ�7&��.��XO��a Y�"�,=��,���#yi���;�uP@���%mF4>�����p���)h�GC(����*�ӝ]߽���'����d����Ƈ�i���k�,�'����1.9l����x��� G�hG�A�-��A�����@�!@?���O%�t#�-�9�z�x��nƧVUrbi�0�%�Lk�*�����O���;��9�ě_�<g0�ӧv	��~�k�50�N�k��$�.���u��� ��򌿏f�Yݤ�iZ����{C߭;V��	ӫ�s,�j��m�_�f�S��e�p�h��g��YBߋEV�߉�l){�f�M�mR���NEִڪj��f���fr�SuKT�D>��M��y��y��kzv�V�ۀ'�qs�_a?jq�u� ?J�i�~$��dt�4_Ng,�#t��wV�[�G�'�L6s휵谄�my��"ag�� !�i�4]`)��>�*�D�����OW��#zTu�3��Yr3
��({���7�+��ճ�*�1�/����1cd�~���;�2�ϻF6�2��Z% �Vla��"˞����U�,Kn������b݌���T���~�Al�ߔ
m@��4	U�
�ȥt%�'�ŲM�ӏ
�?)���@4�Z����R��<1�Q�$���`ƫ����Eх��� �  ���T@F���\E�QW�	9��
?���v_�"{ޤ����8;_�4T�fp����a����o{#@�x�KӨ`۰�g�,��C��P��G�X�d�5U�
��ہ�
fjjك,0�����
���r��}~Hh6��0�\ |o} �]��?֤+پb�H�[��' ��X*�k��' b���!0 �e\���KX����J8'�<ƞ��]p�ڮ
�d��0�i�fnS�&2��J0�v��r[�C�+hjݳ��׎ :�[��&a����>\f(��k5z����w���7�0q����NPt�5<QF��2��o�O=LH-x�����yn���k�QA����c��cq���@j�~��� 
� -�D�ϡŕI�F������'��I��X�����O�Ep�.Ò��\j�R�}2��8B�Ks�jSW6V��:�"0׻��kaE���C�8%����"N�\9�6�����,��T�U��yx��F@��A�+`��(�����E�k��ꮭ�U9��si�ɱMB��^��k���xC�@�Vp��3�d����:�@:�zľ��7E=sū0�_ݶ:ڍRdɻFG94#��Y9�I�I_���uZ6�K����,�jE"^�m3���U�x;�"��k0#�Xs�:\D��]&��	Ŷ����Q�M��ۈ����l&���f0m��^��ս��g|����/���Xn���[����kN|O��-
�J�喟G1�i%�[e�z{z�C�/oa��{ڨ��l_D���<�sJT�y�X(p�`6��M_��]S.��[;��a�˄�4���!�`_�7�T�߰�i��,�m�4��;F�	�?�) 9���,-tj��x�ar���v2?k|rP:%�w��=.�F J��(�|��n	�P���DX?
3����\�S(v�T#3�m�C�H�eyAd@j��uh�C�k�
�Y�QGk����t�e��g���EU7P��E1�<3xs�������j��EF��#8/a'���<���h���(�]@Т ��;/�9)X� #�I��j�I\�f���b�z����ed9��k}[��3\3Z���}8��Ε�hלcH�A�\��,��z���w�rcȱ`������o>���ON�^����vWZqZ���Xc��VtX���v`����e�@��.mZ�����,"zO���4��9�uk�!�,�9����{����_��W��G�@      �   �  x���Ɏ� @ϝ�Qx����鈖c2g���)�m�8�H���| �^1�5
:� �û���?���u�=7�"?-6꡽w�M��L1Td! g����(�=:���.��E}�929�M.���q�B{ss��d4?��㜋�������\1ƀ���Wo�V����*�0��N�W$O��N�&!}S/�_�G
�bB�@���x7��Ě��&Ѽ�E:����,- J��Pm'3�/w������6�C#������]'=X7'���V�B��lXK�������R�Ԋ*�f2�?Y�+�N���$;:/�������X�ԕ݋�N卼�x/��#���-5��ȷ�s��yK\�v�ĬDZPw�h P�7�h���*���vX'�D U}�z�Ƕ(8�����)�g�,%g��&�d_
���
@��oQ*w�2��tW���"������fO~���������`6ZVt�xM�g��Z�m%P�D��A���G�һC����S
�A�� /��w�5�%��WN/����i&��i���V:B�c�}��I�%٦���Ƃ� ��t���g������QХ��W>E�nhx�Ml!�Jh?����<YyM���<u�|KNS8H1ǓCσ�O]��MfC���n���cz��^�X�"�?
砜�*HVy(���,�nXcd�x�E�G�Ǧ��=�3g�������T���      �   �  x���;NA���.� m6���*� 4f�	F��a�Z��ao$(�]i������d4���b�
S��c 1ɣ�aO�ař%�&ր�Pp������= x�L�P*8	�ךE��FJ<l9�M�\Lڋf��͕>����ݸ�Êr�%�t�1%�^��M ��>��($^�$��,/m���H����{��J+��L	0zvV2bBHZѯ4|8� /���MG�I��{.��R��R]�:_m�j�!�z~۹�ǳY�<T���ʐ�j3H\G}�~��:�(�B��[�w��a)��C�0`���aU���%��<�j�z�>�Q���pu-Gs��H�6=S�+c�Y:��j�ί��D�`o�|!c�m�L�r���r<��Rk      �      x������ � �      �   �  x���An�0E��)x���d;i�3��&ڢ+oF���"�!��Q]��X����� P�O���V��t�ڂ|�x �}>?M�T�us]�t]�U�]]OֶϋF}�^�k����dMK�l���:���R]2`h<�	3`�����VO�V�g�n��J�ݨ����~ �B/Bc�V=H/��h�;QkQ��k�]�q���	������ދf#f�a4tjW�|a<�df;�����\�Bd�+M��׳W(�_�<'��"���7� ��o!��l$�2l��)�����}rt�"�<�Br�^ؿw��.��k�0�+|D^M�2y�6g��Y��F�7;�ˬ��)�uHm,�*��O�ERH&׋=����:o���^REF�WN���dȻl�x���B���Xw�F`��~�����=Fz����dM��O���?F�g�      �      x������ � �      �      x������ � �      �   �  x��Z�r��^�OqW�v"���3��Bɩ[YVE�ig2�!	1� hW~�>A�]d�GЋ��(H�86�E��9 ����\�ȭ�DLS�T���|��7l|�_E,���?�8�t�؈	BM�UL���g<r�h%g��Ox�������D��Z�[�VK��M�z=/}�dˤ �����:�@�1{�o��*3�q�G���%~aD��8f��FƎ�v�r�1���T� ��x�gF)9(ޥeR�ʊ����YQyU�W���S�G�>�s�ߐb���L2���KΕ��Q�$FF�G�� ��
k�c����x,\,��`"n��!J"]F���E"Ҋe�+_�Y5������֒if�J��~|],�8)nC)	�zfP(]@	?bK8M�]ǖ)#��S�Ǎ6F�5~n����uU�.��Y��r�W���/�Ey5i��gU����Qs�R_ws�-�
��(Āt��%���ۊA�����Op��
�W�]��UO� t�`��2D�0r�֎�~�f9�~��I剰{d���c�CJS�O{6���B�k�O�2����X�A�B�dTkQ��.p�P+y�ܠqA��F�mk��<�'����������+�r�H2�"��HR-�|Q��yںޗ!.���҃2�e#�Ric�~d�	���9$ ������S�)�FЦ��C1{2tL�.e#*F��b(߬N\h��Z�4-H\k9ڵ�˷z��M()�n:q��!]�� D�s�/�k0@�n���<�!4���|�̺O=?ڟ�^ʃ,�*�<%��U��ȓ�����7@7q��`���4��n��,�q:_��dr[��_Lрsl��Q�!�����ba�X �Q*uˏ8���p�������|��*{���ʒ�
�w�_��Eq�^���/���\�knr����/�t��Xہh�\jn�(7��[Y���Pag�J�ҺO�,���(ކ�n�]��eV�7��1�0y���7)�omY-4?���@��c�v�jaDm;�ik;���+���Ad���2�l��I X	�k;�b5�(>K�yU"���"�0\�H�HE���K�\���j@�@83�X����vmX�	0���.�M�e���ɀ���r<O��U>y·�/����ZmW^+ѓ��^ͤ9�$�HC@�hc��$�������ً��2�?���ы�>98$�����>�Ɨ'�fY�q����R�R��r|�ABR'�$u]y<�ΧP���4O�̶�cI��o�E��M�Yn[&�E����H���J�h�%~4OG���&lG/8��lhCG&84�`m9��SV'-d��-i�"�]%���0�A���5LR!��e`����ϳ�Z�����P�~I�A��eo@� 4P
E�T
.:�l�~s�q)����Qݡ���	�dD�X�A:ĠC�a��:�SJ�E���:���weL`�6��U����|S���"��a��p��0|�������!S⁆�AB��y����%4j2�P�2���if�y�����Sf��M3�>4��4ɋEqu��'wdV$Y�Diz6�W�5#$�����#���)B&RMF*���C݌�er�-�~t{��L�2�9��y���uu������˹Q�)m��gfN�O.S�����?���R�d2d]$�;^��ueh]d�[��(�+��\�&s5(Cd.��!�Oo_P�5$ݠ��4@�@��`p���>ne�n�A�g�#���I"��$����A5(Cc��c�ȃ���EC2��-�<cU�4$�h�Ae�a���V�\��s;�>��j��?�ַ�h�
�5�N�A��E��<�ä���G~�2��٢��0����u��O�Uz�1`$�y���qrP� %�b	���#|`0:LɌ�Z	�q]�(#����Ֆ��3�2���qu�=�X������M=2\�k�^�>��>]���0G�@�C_V�2W�w����%��l������� ���!��R������*�������=rΊ����(z͖$~Y��M��-Ba�V.���o���8��9xD�0.I�Y�e��9���]FE@�'�
���/�x牓l�������)�С�)S�;)UZ�:
<��o�J���h��d��F�2`۰	��/��mh��8c���W��_��u��B�ף�ύ���e?�б}��{��/ߦ�S
��M��'�q����w���S=\z�wuL�\�m=���\�T6�RrWJ�\00�
#y�]��y�-�,�A�`������x�Uwj""s#�a�ܬ
�n��e4]�.�:��~�����Z�� ��7rv��$ϒ���:*~��S��N<&X,R�r��r��u�!��j<$�\��h,��5�Q�~t~vr�3	�T������@��p�Ćg�e�3�֦�3�w�pH{zЗ�CBw��m�a!��4ҵ�Kg��NF�_ݜ�
1(Cā}3 ����T���8מw �)��S��-W���g/�����'����s��.�z��o}g�e0Kp���fߗ�C����/�H�8�V�{�_������Wd����ƴh��(��H��S_����^r��H��Da^f�EU}��C&뇎W�ˏ.�[�k�c�7L��=����/�a���yg�C\�e:�aMK���|�-9�*b�GQO���<��	�w)�H�s�Bn�L�h�r�Қ	C���5�z�M��z�� ��٨8Xs�C͠,`�!���4��fJ�q@�6�Ѓ������s;��D�AY�����b�[�
�1<�9c�l2Mo���+p��7�6x����,�6u,
��.�$� ���m�i�Xk�$I��.�×'�����HE���i�XG]�/�1n�ۚ��L�y�<}D�,��;'ߔ��׷�*]��+Von|���`�_�^|�.G���Ǹ��R����d��@3��6|>\��T!��|���`S	�-Ք�@�`�g��M��v}��0����,T��ea����Ro���ű9����W_�1H{#��Z��J�E!�(k-���Fƀ�3\�p6(�y�k䂷����$Bǯ!�>w���[���Ƿ:�d�CE��� \sS����z�M�S<{�yK��,��!R������
�!�ޜf�e���b�;.������d֥D]Y@�D��<��߻h_���6�A�Y�oP㋃��&�wx�o��CEǝ���a�eFY[�����c���Z�)�}`�a��ٳ�� �      �     x��X�n�8>�OA�;��_��@�٢M(�vؕH�~�M�0y�=}���P�,�����b-Ŗ�Ù��p�a�	��R�jAJ)6��H�},y�'u-���w�"$$�kQ
U��܉��yO/9�8PT�QN.ʄ�0�)o�����;E�����FrO�&� E#@Qb��XAA�Ar5����}BO'V^�prz��|�p�0��2�7J&�����*�J��?V�=GrQ�I�Y�.+s@A��Wo���Z(��]9Heh��~�V��Z���
�÷.�l��E��X���ڐ�����qA�Q�Ɖ����=s�A�B����h���R6q��w�2B���/�xL��l�׻R�d���,��LR�*��|���r�XH�E�f���aD���`D|y�iB��Z$��НN�IP�?�B|���A?����R�T:�h�*N	�(�����6�!o�g�v۷.;�Y��6�w�0`�s0蜹,����YȜ�	M&@j0/�4��u��;"�.�p�BK���|�����M}� +B�}�Qz<�A�I%�7��Ou����l�H{����0�V�vuJ�_���$UR�"�Z��{��]�V�(���7�#0��#�nL�#��n�E^��'�o/��%4ƝM�q$��Цt��������r���\��ۏ�W�} �����guIޜ����֔]�_v����� Q��G[}�P0 �����;������G��"��RW��D6)����8A5 ����W(ʢ���9 �&��(�,�f���'�)d�UC�R�g�&Ǌ��8!���Ot^��} Ss�HS���D��t+�+ �Es���q~ÉT��4��I�ԕ�W y�VGa�6��|PV �}�Ņ�B�P��Ղ#�!Kɥ�;C������(Ȳ�8Y���\�f��{"x'_��p���9t���w��2������dM�-�=���@��z5��0�ܰ-^��~ RLy��Iyg�Ӆ�i> B��9^��M��H�?L� u�g�H�p�b�ۇC���=��!q݅���i����M=델�н�-���Q���O���á�?�JG ��	��A,�	��뾛I����C�Y���@�d
QI9r�KD���"/�5?}ټ����'A�p��g�:��AY�LD[���9�����2u�}�iׁ�����l�u$9�@{��Tph[m;Sf�QG�Q���u�����:ls輼љM�d6!r���)����ۺ.���Y}+� ������ң<m�n���{A�Z`B/�c��E���g��.��Έ��(�������?��a4>?��_�tR^phcv��z0�̏}:��J���CG�
v��W�zƼn��s}\�ۀ�i��rDKwH��.�qwF!����7�Q�J��TޞR+�s�=b�]ޅ��M��%}�7�Q�Bޟr��<��.�ty�G� `�KG^gR)}��u����Y��$ڵ	���Cr��F4d��z>�N��;�_      �   8  x�u�Kj�0@��S�%v�����|h�*ٌ]�H#ǥ�mr��#�b'�K��y���¬��v2�᰾>AsR��C�c��6ͥ�Ӊ
�t��\�,���1,��X���t����ԙE��e�Ma��q�a�t�I��s���ݓ�8_�In�>��`"0�Y2(vhN�3�u�cdzlk,�a#�"7�яǰ��٤�g�	�+s�[敇N�5��^�wDԃ%*,x�����5�aW��NZ5�ll�;��>�~H<�����L���es�@�\JP,T�];ޣVh*Y�����/���          �  x����u�8E��*�@f ����
n�u턠��;����v(������"����%|)_���Ͽ_B����>�C�T��U�%�s����K4e.4j7a\���s�S�/�)sa�x
�*-e.L���X[�\�B~���K�1O�A�9������2(B����*vW~%\���#����~d�_e�ۚ2(��
���L��} �{��Ǿ���b�Q�e�2(���+Jχ�1(��)v���O�U��|+�]�/�%d�Hʠ�_�S���A�/�����}
������M���֔A�/�Q�PTaK�Ee�8|M��e��)��w���Iˋ�?�%9��4nʼ�/����<��$*)Ö��DE1�c`�AaR�J}�zYM!�SaA�Sŷz�)>;�K*eP*i=<�OPΠ��6ǔAi�-*�1�%eP:i�)�R�PFʠ�#���7ZʠL�y*^L�����c�ZnJGl\R������	ՔA�G����b�E��M�}N>?�c�X�ǏiʠU{(�%5S�Qm7�Q?;��A�T�My��SeP�����")�2�·R��(<��BVn�O�o�-eP�,�/k��\l)�"drS��/i)��d1}Y��7 k)�R��M�A�>�Nś���4$�n��J#��o�k��]�J'�Q���=c'�2�Ʃx�-���$�Q����iu�k�V���p�^ZS��qT�ڳ�>�NE�I�pΠ(5�ʻ�j{!�J�V�"���F�sŨYT6S�]�'���~;�s��ɠtj1}y���A�b��I�[ի��A��v�u� �	�)�kH�^���9���9(\��*6��A��u�␛)�����`k()�R���m�8��H�nQi��
��dP�����[Kʠ��^���֙2(������}�%gP&��~Cl^O���ᝲ�(A�q��W��Aa��k�m�ɠ�)�B�}M8�����J�Q������Ѱ���V�>�O��hQ��M����2(�F��a�*�%v2(��?��ָ�^�'�2i̛2���R�
�r*�u�/'��4����Z>��ДSy7��g�ɠ(�#����?,eP*͘���#�XdP�fL��>������h��u�s_���ɠt�;��9�=���r2(��8�ϋGK�IsFe�+���_{�sO	����ô��-��/$YG�)[��_$Jm��rH�-�+��*�chp�\�������6�         f   x�3�,-N-�,H-��,�/VHIU(-.M,���4202�54�50Q0��2"C�b1~\F��)��y(ƀE2�K�S�H1̘��h��HZ��������� ��<J         �   x����
�0���)�T��Vt�"�B�.�$ȅ4)���;9�������|�9p3v��tK�D*�$I�C���h�\�`�����͟�!��vl;�{��p�N�r�i�%g'f/b
v���DI�ۂ�`j'I+TP�D&�,�ʟ�o����bgq�d�*C=��{�_�Yqο�JlD         5   x�3�t	vTp�t��4�44�4202�50�50Q02�2��2�.������ �l8         �  x�m��n�0�g�)n��X�X;��.A��p�?u#/
V:L(R"%���ءC?��b=zh���N���}�ؽ��k�=īo�P���PCiQX�}'�r@Z��hA�g��Q��Nk�J@)�JT�wy/;��:��ʞ��ڐ��I�ЕBQEʍ5/Xv�����\��L�Ee,�+�EC@~��+Ibd���,�+VP�
ՅF�!^p�	��B]A�
������T4T�<���tt/������%:�	/����2�O����
V�Yt�D'|ƿGASmY�"�C�#>�E�p2��5�l��8��d'��}�`�����W�X�p{��9�p:��� {��,dF?=�p�|ڂ�˳E/�u\�N�J�;_7�:��"Y,�5��f��&�[�q~:^J+u�c�2)�����c��=�փl�����)��g����8� ���9�o�(�&�F� ���O      
   �   x�m�Mj�0D��)� ����)�.d�����F��R[R��c�=K.VQ��n��ْ5��J~�.μ�H)��1E3�%|��޽9��j�zppv	�)�_����8�ן4#a6�1�d 8����a�Oj��t&�乐9�A��ˊoouL�At��wJ?�x��ء�@5�1\���P(s�ԩ����C}lڴ/��"��������rw�c��1���Q�            x������ � �         2  x��U]��6~�O1O}ٵ-J�l�dw�8�je��>4@@K�MX"R���{��Fz��b��io�E�g�!g03�P�'g�����ů���13��$Wz]!i8$Jւ������4��B0PZpY���R�B�\C� 	���,�{�*�
f���;�%�l-�$K���J+%k�4ܼ���2��&3!Y.R�B�A�t�<�J7d"Q��j��߷s���LC���D��SQ���I��rnN�#�y_��V�wBQ�T�N��� xE;e��<��C~FMN�*�?/�2��h���u\�Mݶ�ꄽa��������\⑀��2�ua����c�0)J�B�#b�����?���d6���'������q�`�)����hS/�}��^�ò�$;� ��>���>������V��w� �	u��b�Z���ֽ��[$��ϻw��u�=��s_y��H�97r]i�k������'�����n�:À,��4a���l:�9�$���t�|��?Ȅ���=o�?�~�xt~2Ǯ~�rôVy�N�̘�D�m���׊�)��0�����ޠ��|���eJ�4ۍ�u)6�Ե�b���:�����Mɳe)&O/��f+y�l'���h6��W�Wp=��b��TP�l��i�
����z�\=��\��57�xla�I�g����)��@o@�9\67ϑ1ê\E�.�9X�U���Ĝ0��*2�&���������=;�z>u�����j)�
�l��+ˮ�R����Q�zG�TT�A�?0傯�\���m��]�z�i�Z�h�         k   x�}��	�0D��*܀�H&FE��_G�,,&H_o.Λ������{�X1��	���q��WLCB�tX�?�B_�4�g���k��̳�Y1VL�GU�/�         I   x�3�NM.�/R(�O)M.�,��� .#N��ҔĔļ�k�Ɯ��%��7�)ޕ����$���� ��4         ]  x��SKN�0];��%H-��Ϯ��*��趛IlE#;r�V�F�9B/�$T��#��H����P,�*'Q�0c�^S�l��"F�LY�Ƣ��q��C2+c
&I����t���ј903�y��s4��t
?x�䘈����D(MB�1ѮB[A]�����&�Wt@H��(Q#\<�pT� 2��X%Uy�)>�|�Gi�M����9-�kGiعs�|sqW�
K��j1�TpP	iS����q�1?Te,�2�q��ok-�N{�C�$4�?�唸���Z��آq޼��Y8g�ʨUi;�%�t�J��`,v�@q�����5�r!����*,�"]�v��W��} �,.         �  x����j�0�ϳO�cI���$��&K�Is�1��$�*�������r(�����KR$�@`<����FVM��x�Ny�o�[~�t�Y_�摭==,8lvN���$��qA��o���n摭%��$a���*
�2��G%{7:�Gi��8���}��nu�(��g�/�my�m���+�F�H*��>�]�P_7a���Qj�P7_������OU����rd�Ж�d�����/��+�d3���.�	�GC�a_+X��C%u���7�L]�~Z�(=ѳKg9%�Ьe�6�����!��]W�	���ŗ%kxT��!	�)�7I�|�{J`�I��)S�������it65sHo/�첵��_m���!�P�/�m�M[5'd�—�	����t��+�.d�Q�&_Mrz�):
Hg�P4=}X, ��s�         �  x��S;n#1��S�L '{�Mn�&'HCk��8!%��l�b�=�\,�f�ā���T���>���1Fޣ���-� �f��d�g�vc����L��YkR����[O�k{̴�x��~�&�Ǟb"���:4+8t�d���.*��kYYa`��@zs�n���j}�l`�<4�6gϞ��o"C��H/S֏�ĭq�}g+Xզ�WXЎ���|N
i<�XT.��K������
�S���)��=NfT�͂��a�����E�g�_M�D�ǖ%�`�2�vSx>�K)O���W`8Y5�|?��$�-���
�J�tu��|�O,�/rls���y��˱r�V}�M�[��:�6����=vezN�ZN#P��D��:�6
���"ܼ2f=�'.���n�X| їi          �  x�eT�r�0����x2�yЕc+��;�ܜ���p Bc�7�)\dܥ�eO�$ȚQA�����(F��T'�`t�]
������?�;;[E�\�5�n.���>�ߕjr�Zߑ6��S��8�@kr���$����U)v� ՐK5i�o#�<+�u��1[�HӦ�Jt�=5���"X���Bأ��:פTg�cn�Z'M+�����Y��حG�w^��F3��%�15�]�z�B�Ku�*%�(���F�DЈ�J�74_v0�e�ñ
�R،t�w�#� )�:���Y򥍶���{�RK�#�� �x�ߐf�#�-���vd���\i��LF+��7@f��� �$��}h�s�%g4=DQ �y�d�8m��z�|^C��e;˸��kH��A�g_��m�5G��e�FKk�cuR���hQ���/v��Q�$ � v�g�-�{� Yc��i���I5�#����ޥ��X.�!ĵ����ȝ,`��X����6���_ryL��}w����,��6U�.�R��N�h� %��]���@1�����i��;��]�겓M?�T��fO�8���ˀW�<����=��	�0���pf1,;#+F��g}�����u
����:  �ċk-�,z(���e�G8��A��ep`����7/����ԟ            x��]K���u^ӿ�K�j�E�	k%˲�ĶI�����P �h�.�! Zjq���2�c9�NM�8U*{.����y��f�
V�n� �����>W�v�7��t��M�����4�s�.��}���um�q��W�����.�u[��P5m_�������E(ȡ�L8S�HEN�wmw.��}��M�6�Zw��CI����Ǯ�V�T�Τ������_*�nj�H��i.vE�N�Ri�:�Nuќat��s����3!����F��]�`���D�e��]��n@�sמ����}�M�� rpײ�~8wU�W*�H���U�6�w��[�	�>�S�h�M��k{Bhq��`p����ݮ�a�n���@�G�t1�Vq�C"f��#G~7`�����wE�ޙ]�����[��'SV�w
������3,8���쫲jd/���X���V�{���`���[����+���P���c�F���(������h�}�޵X:����s�J �Ǌ����vY��[ŉj�a�!C�8U���@�v]Q���Bq��'*���2u(,��?-aa��[��WPL���� ,�<t�UCa�4�GJ�ep�R�#�\�Sۃ ��n+��j~���X��L�=�G�A��i;9ox��S�;�	�B��܂�=��� ����C�c��t�W�Η�WcP�����L_�݁(E���m�����K���G!m�0�wJ��mw6Z���n�`���wV�*���b�J=T's�kӮ�n�+�%L�Y������=J�}��`֞��X5�M�N�6������ ��G窿(#��o�4�'PV�)Hݖ�}�v˴y����Ҏ|��s�G\ЈEW4g�4�.}R�xC9��+y$�m�֚���28��q+�p�>6��u�k;�%؃����yqĤ��'�МO�T���Ci�^�z�ǌ=�ʆ���&Ja&��1q�JS��� îM�UӬ/�|�,E�Y��x A���x�<grӡR�M���Q8�o�8�̢>V{�a���.���W�m猘�5���V$!�g�s�8Z6.��h�1޵e[g3�n�3lѬw��,^�_��6����� �u9����gT�}6T�ڭD<K<�n��W!����r��Dx9˗ ��� ��~�i���D�w��_�sF��`�S$̶ ��Y�*L�p �0�T�����v4�˚��x����;PR���d��t�tӭ4����|6�����O�� x6�"���#�D�xZ/�����}n���l�z8>sʬn/�b�g����	!ԃŷv�C���B�lX
=�����`��C	M49;��`p��Mr��(�!�\�'pz�ڋF��CkՔ0�ZO:�p�Ptg�e1~%�6�/m#
v���]��zZ�8��ٳz� �*咦�a�r�"Ga�s{t]�4�xIX��q/�'��h@�3{gն��/��n�6��;FS<�X�޻0�	)#�1�ơO�Ò��6�ަ��sn����|�{�ow�]���?x�5���欌ÐY$HvB�F �ڽe"���@G��4>�v��MNc �eny3��ķ�eQ�/���1��k�)�+��q@�[�Z��(3qz��]�R��wk^��NM�s�����3��,�	�lYe�sO`AOU#K����@T䶡'v��^g��҉G��T'M�_.�H�H�	��{
�n�L�7X+����j:��m<[p* ��:Fȓ�ɥ��S�Ż�Ѻm ��-�Ls���=z(�7��Y����6X&�#(�ލ׷�4_&�1��z��9%�c٢@}mf��]1�-�G�A�1���<C�c����J��4���������n(��p�pD?b���л��v+>;�k���i0���p$[��㑙����V�����Q�5���0fG��l�*�%�!���)�[l;[s��󰇾�LS{2%��J>��� A١v&��N`�ȘI�H��se���=��ޞ�J��Pz�,�n��u�?��yZ8��=���Ñ5�Փ鞇��ul�֢�V�y$�?�����<f����4�,�M"������������D����F3���B��>i*�]e�3��? �Z���	��yR�����G=��n3��1�� g��T)�*Z��竁f��::!��1��ў(A�A�pF�s
�{����q�,�z�����n�#�:������\۞RⰭ@�#A�9ֆ��'�� ���Ϊ�B���|��W(z�P=�� b��?�	���:ecLvc�$6��>�`SD	��р��>y6̴���6�R�fVa��}�Ιs�ף�F"v@�$Cis�eh�9�&�y���Y;��/���#zkd�F�B"R$�;����Pk;-')mTE��z�&�P�<r��m�ޜ���+vs���#�����c�K�1�e��{#ʎ����s��M���l",ސ� s�8H��(�{Bj��^
�yM�|�E+�3�f���e�>A#x��_Cw���g*��[�y�Yq�v,����	�gAg��@A%� O�wIQō8-&42�Tal����pzg��g!�KH�S�����H�`�� �-��kf��&�m3�a�׵��<Q��z���9�(Y�R�!�<6䘅o�,5i�c6���|
ֲGg,,i�f����d���`w��b6	��+5�)�w����qOk��4��4�����z����s΢+N_(YP���aE�X�׏'��Kw���=�5}�s	�L�c�#АϬ����hz��L}����(4vO�~_����B��&1��`�,X���/O�?�#u[G
w;w�X��ȳ�,��Z)���dL��b�I�UxA\A r�R�"��d`��/�e=m��qX���,	+����ǙgD,DY�S	�g+H�qi���ϲ
�Ё�n����l�︄ �E���wV�ù� �*)��O�ϮNr�g��#�z����M�sj�;��R�A��$����P�C��睶/��Q�h�HQ���d��ӧN���X�sn�JWwX��Wr\HE�ezo�@A�h	䦂�\�d���,��tRC���N���2F������3i�'f����J���4ۣ �Y�h�6���í/��U��Ğ<�@"Y����y�s�"^x�\��@�^ݙ��/š:�?���(�X�'�p�g������ܴ�� ^��_������~o�4�Ʋ�뢶�"[�GB�dY�yZ�Yp�T����d�����K9g����a��%x��&fY��E�
^���e��-��9�5Krص?�]�|�>��+
OVA��/Q7W�ݑht׈2���s�A7E�=�]t�5J,(�ŀ��;��.;����
4P�@�u�ے'�Q��_��_8�2���fM-�"�����Vv�$:�r��G_&�u�Z<�xtخ���8�J�3��e��A�:��\�طEc�5d:i���#o���C�!%Y��iȗ����)@���s� ���c��>
s�7�� ǡ�e���o_�<ʅ�(���/�9���2�
	�ϣ��:v*h��%�h�4����a�s�=
ї����jJy���^�Q��K����Z�pT�'\��@��I�T{��Gttb����NC߆�x�\.���#(������9 �d�DjR��(�T%zA���qo]�ΒU��]D'T�@n����gFU�D��j�>��a}bv��?<��x�� �ʇ�
6�?c|��o0�C�vL��n,�Oִ��lg��l�JV�G)j�ϊ�Y�[����d�F�	%��G����K}�f���Ֆ��lk3ٽ���ܭ\Ǩ��<+��8�C���l7K���*�� "�Z$oB�qbƉ��\'���4EB�fy��$�Կ-���\��������t�*]�>&ö�K�IM��_��g��^_?4�ӡ-~Yi���2T���jl�g����Ӯ�)�m�8��c�1P��*6�%,�O�!R��C?s,Ԙc�jy��:����<�    �Ȑ�#oR*Υ�Hڣ�;�g�ֿ���(�hP�@��l"�jt2���UDKw�d � ��Q�ſ5�fNU��U�|MZ_��(��wG����b���z�#�K�e*��?���T���ت��rƊ���aH��0lla����#��8�Co$���zK�e�8�ͱx��Ū�q��9���C�=0ʺ�F��-έ0�NPʆ����ǣ��L�j舡������&f����y#>��7� �Ye�N�z}L�:�K%�9.:ۃ�萋8AT�?�IQ�e���::��4�=-N�E�W^��Fe'�l�����[GNMA���܏�����˅�.|M�k��[��{��x7�'s�%��ꌑ�",4�����?���w�4�HXzg���T9�I�Ώ��"����e��_�Q�p�7wg�ʽ#�D%qvQ��Z�����FgZ���75��ul�� ,�Y�` 0�s+q�|=b�gA9�$��n�s\��(�v���TF��l!���9,�"�����A�������b�h�� ^.xF�x�b,���<X8G��X�G;d�ΖvDu(��L�Z�0�n�n�4�Է�0��ܰ���m�����ao^s��li�l�[B�}s�w��=	�?��DA,M�ğt��i��A��]'����\��2�����vXڻq��S�}?��>���>~�jɣ���'��U��Ҙڱ�ծCu���h�x��xr�m̃݊FZ�Uۭ:�M���f@ُ�y�.�jiu��$���#�[x�ݏ�H�>�,
*�#��[>��.6��R�v,�'��/��a��p0���#�;_����~tL������syX"QW��]tߛ� K����}�}ۢ/��C���#����;�6�@�gt-jd{S�-N�=-�"�/G���t�1g!* ��l.��#���Oˁ���Ǜ�v��88�iW4���!����:��}{�paR� q:�Pܣ�2t� ��39��rAmNY2�?�ƌ3���gg���Ƃݞ㘼�t	�QBk������'�٦8�<@u����I�k��F��Ɔ<��e���8�z�}���#�P5K?Ź ����3���$6op]�Wl�_���nޠ$�M({�i�4� b�ck��	���))}��r���(�A}��Ăx���MĢ8Ј� F�"���
\L���$׸��q&�o)?y�Fw�əQ��;%�v��N�HE��,�x��e��P�Y�/���Jݾ�}�;��m�������x�-�����CgA��^�P-`�KѸ�ܑ?�Z�ED�z�I'� ޑC�����x�j	F݇��4fD�y��h�8�{����$�[�ЫW <ݦL-'�	��i�
6�I���Հ�!u&�`,_vBգH5��K�}�/Vp"�����-1�4Pn��%����ؙ*�lca�uG>˺f�4E�]��fz8�<�\͝ݕ��X%�j̱�cJ�C���IK�2?�f��u�!Q/�?�۞��tQ�g���~�E���wծz�Wt����< �I*�x����ǘ�1������.݌F��@�{�}�t���!?�Gkb��9��ubJ���dÊ���q�����,�N��Ec�G[y`Pa����c]9�o
�M����eQIÍW@�+wV#� KY�k55�6y PC���g�r�n�8��ݲgS6m��S����-;V���2����M[�^=�/�b�k!�ރ�@U�i|�с�,� z������6��t�v�o{������[ҷ,g?m�,ȼ��Mc��o��)����<���C]#�-��V��O�P�=BԷee����B�<Z:Y�6\1s���b:{���Aa�|�癬0�����ԃ��H�uR�����M`�Ҍ�B��:�W�Z���n���"'Z1���J<󒐮oX#>-w9�n��7Bˉlg���Y85�	���Ґ�(d8S�h#|��m�ct�t��J�k؋���p2C��&-9�ƘE'pg=Y{�@9#�T ]_v#�ݢb���+�$z�����t�.cT�������׿�d�%[j^�;��M�#�˽�3(�@oM�-6Ӡ�_>g\k}Fф�q��O�vn�����h$�_X1�Ut�	/a�B�c�(�3�\��Z�&���
�����:����������̗l��5i��L�}"��qd����N���4=��'��}���y_k��������Rt|���
x��6�������c&�y^ՂWC���	;�]]t	nQ�8~I��7S��'D���T����8��O7#Q�OP��`=T=�C���A���{Qc����K�]k����)ѓ+2�M��I��?�_4�c���݀W�hu�['�a�"����8�P'Lֵ�|��7ze��!�,�׀Y*�x���y+Pw�8b��e���]�Px=�{Ơ*��-����~�a���Q�(9H�gj/���cAz��!�x��,�!pzm�Y��{`/�g���R��R
��*�Yr{��� �] �ᣢ|t�|��isE+��g>W�ط���
�V�� G���y�J��5.�C�^���}k�������D�!y�x�l�7[&���lo�R����a�Z�M�G�Qq���g�"|Aǰ�]3�O�^��M��^� �w_�Ʒ�	!���}H����R�E#�r6z,��p�'���.��4�/rF�`�H�=i��CJ|0�+Ҋ"f���đ��Dw)��E���"=0��������|�I���1b��(�����:ڴ��#�Q��D�B��"i��2���v��@�=9U_�T=����q�/�,F13�6����'V�ْc 0>z ��F�,*���s� ��P�iv�yߖ�%�ewi�����5�^}>��<ܺ.���(N��ĵ;�q~����4������>�����J�>|#wP�N�#�3���`2��&1���3�mz�Q\��	��9;�!�xk�JN�_20���� +���m�QP�C���z"�.-��G�Ƃ���.Uyb���
؞��D�FM�����3�#`Z�i����>`[9�g����D�p�gJJ��zx���x���}�,JBA���ta��eE5J"�x��{0��C�ֱm��t�* o�Л����[��$T�ʩ�f����%�y��M�2��PPD��AD��W[�}�̢y_����&�!�?5a&��O�=�Pp2�J�ʨy�lk!B¥�N'�%�;�0��D�z�
V9�H���q0��ĂJC�@�٦�%t�jX7m�e�L�s�M#!Kn��r0"hZ`�l�o[_����=�^��Y��&B� �� _?����4����3*�I:����a9s�(�y��4ϘH���hW�a�Ï��Hx>�qě�	Rv�9��ɍ�ޅ���I��'�����*A�̜F�L�<����I�~u���Iq*�)V1������a�a�>;�zh(���fY��G'JϷ'�V��j��:���R+�����,1.q�O,Y]��b�<���^E��CP�s/TEX�d�)9=�5u����3z��`�׏���",B2���ݾB�RϽ��߷�}~�yG���1x�/+geqW��+�ŉ��~��T4����s�zء�-���V;E�,
�$����D�9��Ι��>�Y��%�K��x����lU�G�\X	�L�or��W�4Xg��Į��"�0y�U��JF����FtRC  _�X����H*���~��ߕ��V��Q��'`��bi�E�ϗ��Azދ-ș<�<\�o���aE�q��W���c��F"���o:FXsd��0n�g�n���&u3����e����#�#�˷7�΅{؟j�s��[6щ��wI�\X:E���"/�J��	�\�/ߑ7fFHxadｷ�?���rG�g��S�IR ������(S��q�E��S����������m�O+幥~;�U˹�U��*ܬ�=����+ѯ���' H?��GA���h�x��`�9ƚ��F��o�Y�LQ�&�f�#�����o�oO!����1$��t���)~����%��g�r�ɰ���/ś-~ 3  ���W�M������ V>\}m�S]�N��S�nB���v��qG�C��S���Wa��\^{�_��ŷ��1��՗�k�\�3�����械n����>1��0����uY�ޮ��6��0>l��[=UX~h���n��c�S���	$w`^�K��i���'�x#�у�X�=�?�Cc���X�wS/L���Ř�-2l����O�GG����ym�};�V��9~���h��|S��銣 ?��Jz�
�%/��Ww�R�x�~�����Ku�e���ۯ�_�/]�i            x��|ɲ�̒��,j{��!W)$��$��devM����G�e-j�ֻ��/�!q 9��n��9�������<<@F�.�ց���]��a�=*�(6 ;0���Ո�ȁ��0
�A���c��!�`x�o�����p�ۍ19���u��mQ'�0�I�8�__m�6��U2�N"��o^�-m��
�8�'ٿK�@����s������q"��k��V�w
ש_S��O��.��a�Ι.�9t9l3]d��3%y�mbs�}K����^�dr=�o�?
c�Wբ2��d�;�;Q`F���<s/eȧ�i��w��<{��Sc]/�ّ�Ľ:l��^���nj�˱���-���JP�t��T,����2�"���o���2F����Ul��'��a����k�D̺��.~A�3��*���l�ӦUw9J�mp+�z�/O5"b|�jM�� "<�t2ɂh�6�"�e
��B�)�WVu08�'��d�/�Oc4+����Fx���F��P졞�pv��6��H;sY��C�3W6�B���nK[%�����Op�>����(�"��8�֩=FR����B#2pw-vB�;��r�:?m�+�*�!�/�w�k,s2g\uDQ:\�~\�0���R/��F1�u��x~�7�|����U<?e����iu�$��g�����_�+%Y�W)H�C�d{�{�%r�#��j�\�&��G�p�L�»��>ɀ���FR�L+j�4~{������@��R��%^������n3�AWiw(����;>l�*�C����~|ya�5\m���F�ўs+�%�u��؉����[�����`uP�ew��d�/��-�G��u����7�{'ǟ��qR�V�<RUg���LX�2�2���S�g�%9�&����A=�C�/S���ۮv��>���%�z}���1,����[ේd�~��M�DЛyO��d�/���cFdoN��UzF���?w�/�wز̣6��<7� S<�� �#���k��f<���e["�2�MևǗ!�(E�Iv���|���UC���/��j~Q��9�u9�t�'m!���0w�B�ơ�p`�`��a������~�R���̏Kۍ���J�㢬��vc�KtS�D�3�X2l^�Tk��t�O	o�eZ-�,?C�A����D���&I��-ƋHX��=���y!!���N�ͦ��d�K6�#f�VN�I��4VI��ʇ$�,�&�<�g^g�ӓ��/�H����Z5�E���	:-�噉�屜��M%��D��y*�*�R�K.�|v�d���z�uy�ivZΌ}�o�\x�����P�v7�y����e���?'���erg�|s�k��l%b�-'��Ym���PL#(
��������IÌf<'w��%�bst�9�7B[�*�$�b���6߈g�R�"o�aM�p»��^eL��qt�dyd�1�*HF�� �ӹ�3!5����=Ej�ήЭܒ��xB��YmA���צY�M���)˓�J��
���?���"��F��#ڐx{��,[�}�����v�-1�p��{�Q臌��&1�5�ĥ�2�Xe;qZi��i���_8�L����Ȉ�7�?hYp�jIv���ugl�+�o
lne��<Q��=������pK�"����7�L�s�FTT�H��vF��e���Io�p�W�f�S��2�
����=C`^~ׅ	0�T��>�0�G� �_��pa��T�!��-�'�$R�pN��)�ɜ�t��ݛ�ԞP�t]c��=ӆ%�,QQ:!���<�Bur��
�͐Lwی\iD�$��"����B@���b_���h���d�9���N��Ҥrʠh���x��3N�d$;'3"�j��Q&�l�Z�Z,<�4/ɪ�y���&�5�L3�`���<R�FJiPSK�لĄrNW���9R�c���r*=k��v��񫝯
}���J���n lʱRX��{��WE��"$A�}h��I��t�^�+����t4�*����5�[�Txv��>����ˁᰚU�H O3v�,f\t�ĸTTN�Gڞ� U�+#[�p	��)��Uws˟
��s�_�SIb0qH��9���>�0��mZ�`�E���JFn�is��_0������
���Ӎ�2�N�]8D�'6_����slV)�U�7�0���q��[��uU�<�-aY��B��qQ�jy�tone���y�[-'|Cj!jC��'�C�vnƨ���B�d=��'��PV ��Xul#��OA.�,�3��q�o���?�6�x���� ~�=�B���q���ac\�.�~�]�)DXS���\���[�.�~i��Z7���l�B����x>���~ù�wc'%���ޞE��n���$n&|{/
}���ߣܟ�������=t�81g��-.
����!��Qe�v��t"��)�����,��Ft�������,��6�1�J��[Ŝ��z�]
*s=��|bO���M�i�Sz�8?����-J� \�o��Ϟ^���<Ӎ~��a�)��5�X���h��Le$۟�!��MG�-�I W�!�\�jGt��g�@�2ۨ��*�뢓κ^b�Z��E��E�o�n2����cy�S�ޢ+���'��h�P�!C�>Za�ڡF��)v4��g�x˪������<2�H��(����d��B^j~�{
��z�ݣb`ͨi�O?�p;b�l�XnN��D�Y�Z�˳�����V�!?-�ղ�M�Cn$��f�"cAm6��/��Cr,�0�sf_��w�>�zs��В�D�XIC��AS��ߛJ� �B��%@%k�(t�� �j\j�-W%zE^��9\K�V����W�Q6X��4,�Ԡ\i���RV�W�� ��/]�[뇩N,g��仩�>�z'��� 8Q����yid;Is���p1����i��U(�	�N73��e�������� ��"�	�6F�mܜ�
�ݟp>?�/e,E�Ŧޚ�{���*��n�%g+�B��M������,^�$���'C6���J�[�lm�0qx�����' ����*����%eI��6]�
��5�r�~~>{WRl#�y-���{P�d?^r,�kE�\��z~!��t%�N���Y͞���[U�N~cK��%��B/����,` &##x�M��)�|Ua\�/����~�O������@x�Ŀt^�b1e3a�Z3����0CpYW]�V��d�H�����f�ٜ�Ǘ=�BU�$�nBNW���2��tN찁�&]�*�������ڇ�å&���Л� Kv0�o���.�rl$�S�9@�,߸��AR�#|`������aX���� �~-q~�PL�i����S
����bL�\~��CzR�$\Vl���9�1����	3�0΁��qW���1�����n�N������T蓬�}(=KȮ�Yi�ч��Hz	����n����^�WO/�˾�[j��W��]�����x��Gw�'9z�(���yI��COX��tRg�h��˖LV�L����$ �DS��>�Cdו�<�����r��އB�d�����j�9g<K� � (��)�1_��QW#ú�ߵeX��=	��p,�'��7�^d�R��<䗁�k;��i�Nu.��]����'��n��.S�^~p��9 ��5��j�\u�xB�莠��a������i�P=n���o�?�$�#2��ѲN��=!2�*���?��	_J�o��d���*��b�<w��URV�\��n{��k�W�\�V���r9��kȋ�mrAZ�l�Zȕ�l]dIjb�U��)��[�7!N�n���oP�.������b�/➌z��"�c�0�9�E> �W�4�ν(5������o����bloW�����stC�nA(��HN�1��4���H�.�`�����WS|}8�Rm�z��njOj�("�6a��\��Z(["�#�C�O�x�)iNY�Y;�������XnÆ�g���͛�fB���P`���lb�mt%���-��Tg\�;�5��f�z(Y��þ��    ��'9B���cs ��W=K/?$Qjpd�J��K݊��mT����u`�:�G�L? ��q�:s�rW^�F9
^�p�.B�[�d���D�Pf����$ao���4l�@>J��vӝtk��i�w/�A�cݗx����$��1��HO��)��6lc���Wb���v�I0��ח�>Ѐh�w=�i�?l�Cy3g�����Ź��B3��S��Z06%dː9�O,��홮�]8q���]��O���t9;�݂��;g\�[t%+4��=�<�.���ÞK|�����G��_�f����~ʚ���oGB	G�s������.ߐ�؟������-q�^7rxn��;m��/$���z�#/o�&�	�h~�c�1ۋ��͎�҂N1NJ�3��o&�(�&�=T7�i�T�x�}��/��r�&NAd/+�G��۬�� �| �YX;�JLx �m�z�ԭ�i�M��1[��-K�mg�Z�?�E�RZ�G�獹/Pʦ�jE*��v�p~-�^x	fSCw�w�
}��&�O(�>"�n9��1�@�a/�z�5�OsL�Է��lrPK��@6J.�&�z�g�Ûޞ�*Y��K��]F
gﶧ�Od�E�8)�@j���R��6 j6��e;7��v:��p������,=|3�E�7@FC�O��H� ,�����ż��lk_���"y�����Ͳ\��!=bAIx��� ^�f�ȷ�n��Vd�Z���Ǘ�s��U*�;9������)���%�H��D@�(���	�l}*�&���M|d`��+��b� o>�zh ���j��-�L����4��eX[�vM�PU����9�-��v��b�	����:I��raOf͝�l���q�Э��>�m�MV�bhΛ�O�>�z�;�z��`5R2e@�b6����v����L��m����n#%�bw3�þ��,Jq>���̋}�|��[��1ݰ5�R�g���r� �dIC�7��ZT�T�o�.Z��*�6��.K�uh�����'�E�O��rt��/&n��P�5���}]��;��~�x����8����d���[�	�bb$��ū�$�fvnJt�O�x��օ��׏1EW��4=�9xgQ��<���%�a3�X�[+k�i\��s���|(����t�����=���2�g*`2W������*H�}U��Gx��ڀ�H�aݨ�~B<Q������Ǵ��.��@쩸%ַ�$���^$�2�����A��ja;�w�e�H�3�D\	�t}�ap:�}F'�of�*�I֛I�@�]��l�a�;�X�������yƖ-A\�����z�Y�~|\����c��vh�d7��T*1���"&Ԟ��-�*�̻�֜!u��,�i�Y�a�b���ȸ�����:�mVs�V֫�Q�i�]�Wp^0��*M�CE��7F8HBw���
��G�g������ﴮ�4���,�ޏL"Hvj1�JX �5�p�-��&]��#�7�o��|yZq��t�^�������_jRۺIʩW؉��`���ƚJas��u�\�ˍ�s��?�$���$IP��A��&N7��0����Sf?Pc?�=�=�JqWz�#s&��x�Y�!��'� �U2�'��r@/��=_���d�&Th�������E�E�����֙:$�v���h;�hk��ޑ�v>�$��j�wf "U`��ձ�6}#Ҙ�@�Q���i9A�|�IB!�ёi(:wj�)��YtVb�M�:�8:��k��I��fM�lʨ�.��:����d�5��6}�E�V�$㟋����YfL�m��]�����*�Iַ�[={'����`5�U|�`ȿ1�@6�s��X�ܒ|��NaM��H[d��F
�`OS��<1�����=1���w�z�N�&6>"�av��s�ҥ~�7�>���^J�36λ��>�zC���x�W�� IK���G���vFI<���M��7�
��[u�vR�0�����6���i�p!�cq���5����7��יK&<�\��:^ya�
>��S$�'
y�^�G��拉��h���W�>�z;�44w
�mc,� bD`ɺ��Fcs?�P��f�<�N��\�{��t�_����F���Y6-�Fku��dyN�����f{�\CJ�,i�\+ �Z��6����8l1���E��tx�W%a�[�P蓬���#�����d�A1f���Q3�~qf�U���oȳ�p�)%�R5�}M�l�0׳�X]'NC�����:�:zeSݡr6�ezR\�Ȣ2+t����"J�鵓�i���G����Q�|��� ��[a�U�Ga	Zbp�HJ #@� ��۴q���FT���d�e9\}r��ڷd<�-Tͦ���mK^�oU�ֱ�K�i������O�
�`��񧵓�X\C��7{�����,cY��D�(]���|��O���Y���o����w���`��}�^�ׂ����;t IG�Q}���'��ma`գO�q#��S� �n0�QQJn�
�NT��%�3�#�X�;�;�)&.�;����2��3��
��$��n������(R�e}m�b�[�P蓬��a��bcx<pۿ�g�{��0�?�[�)�W�O���6�ri��ф+<Ec�&��:Q)$��H���P1_av�1�WJi�â�,/�R	�z$:Iq� �]}����7��(�c�����w��'<�kV��IX���P�c�n��<�e�\`�N�'�E�
?l�7�����/�x��1S#@7U�����@~�'K���!��'���C����z�4��}�t"��Z����6�d��5��*F:r1�l�vu��}���������Pp��U������O� ��P���_�5^@]�Y4�Ͱ��}�A�iɠCB^���	�R����,�M�
RG�e+Ry�B�����(J��YK�.��,a��5IA����kIW����mͩH�Ze�卞�kE`-�,�K��:�B)�D�ѯ��W%�
��@T�a�
�T�G�����ᐡZ��<m��3�4l��9Mi�w�;�����ɚ��\-��֮�jG�w���}����Oٝ3�����0�¨����8�<Qs�$�R��2Ʒ��Z���Ȫ��0+?H�S��5��0987՗P���o��h��mn�:�#�w���GKV���\iQB�W�kB9�Z$�;3km��Yj#�b�čp�����qm�:nj�)���|g�H���dj�ꩃ��w%鯌X�r�$�$ͬQ����t�4_	J���?�$�|ʉ!%�7�Vsy PW9�N�-,���m4ե=�p,�͉_y#��&��W��X�,qG�n}i!<��Ct�:rS�f�-�.�+�I���~U�]�&��:r���_���&������~31F��H׹��	P��*�=�'ɗb��m3�_�-��/S*(!Z��l���!soMĥ|��S�3�)�,��b��2̪���ҙ��X��̗�*u�|�'p
�V4�E�~�����'Yo4�Tg�<f�q"���{�1M�k�d��C�g'%h}�u�H�/�S1+\D�\��L#c1<=˞�5����A��W~�Zݢ���՞�$o�3�,M��i}n��������'Yo����YAY�~�}o�y�7��ϡ�{��c�ش,�')���{�*xk�����:&=@��s���?v���>�[�ߪ�zh`[�F҃š]/����!�� ���O��=�{�v*j�K_^�ܮ�VE�X�j.wv��o�M$��dS�xZ�6�Ҏ��0b���"��ɽ�M���g��j]�l�i8�	��۪sm�?����Ϋ��
}����#��6N44������(�����C"��5�Ǭ?����p)����9��Gi�n_�5�@ �� �nչd�Y�ul˄DL�o��K��|�y�;M#���| \t}?�����>j4Na_�:S�{FggI&e�AZ5�,,�ńa���V����꺛�ŋ���y܇��?�D �  5z|(e\�Pj !�������z�(4����u�E?���0/�.f�̗��ڃ:�T_�d������U��7C�=���+�R&H��W�G��Y���)㖫6^�HD��U��|��I�;��Ɇn��;�/
=J}yԽc��A���㰗�+G����D?;]��k�����C)p�4�T+[l����]���w�Ҷ�^����7퐯,G�屛���G@W��Rt�W
ݤ9�s*��躛�Si�ou�1O��L�=;�ub_�$�Ϩ���/�1HW����3������	| _{����e����S[�J���M�c9�g�Χ� Չ�o�77|�7T o�����(8E����]��=T�����-� ���}�?��=�)&����£䓼�K�n�g"��A5(��	�ދ"+�
G��"9�7�>�%��U�.5ѡ_� �=��zh'� �n�4,������������&�/}�.~��,��4��5{����̻Wܑ�bj�W˚Y����dA�~����>,�g[X@8��cb�Ȉ�F'���K��F�	?�⬟�^��ñ3�MI�evĨ��˥�F+���py�6F��uc�K��j�s/;w��c��g�2���I�#�G3;��D����� /�P⇶�?�o�j�j���;�ؑZ�,,Y/&�(�G�JJ�slySڸ�k�6Fx~��a�?�CO��F�#��T��f!�����6��i�x��MҞQ,��v2�c��
�@⌘b��m�r���F_�.�������=c�.{��Q؈!>����t_y&_$�'�����H�T�0���2�Ȧ3e%m�G��VH���b��\~���v�g�M
r�38��wΑ[\E�Ter�f-���\1�I�D,��~�{W�)��+�,���Ѓy����1�����L�\[�o�:�l<�E�N�	fh���%球�Δ?d�P/Y[��g��r�M7��hɭX�3u���2��G)mi�\�{l���<:,��y����$�O��=K#�����X����(�EPY9���?���*��_��_�b�O�}�h�o��g!���>�q�47V;�0E�.[1Ey�	�uA�ʪ"�Rk�U<�ըS���������\��J���-�f�ۗ���
}��SI������k���c0���I��1�߱�}N����?�k��e�E�=-��֑<]!��j	��i����t+���\����cX���a}p��33�I�,y�_7��E�K����~�+�'�b"��$if��ö����dZ��/JL�Sf�pkW�Z"�7Ne<96�b�df�Sߴ�P_��zm)~�W � � �d=M��﹙�]�;��gU�P<�j-Up�1w��w��o���bE5xpb�v�_8<�2���p)i��:3Q��Q���&۲������9�U�]g	�&G�~��U��2�q����#�0��ᨴo�������c�������'G:\Mj��gh��J�y///��żfV�.�7I��:tN�Z��cr�,�~+����sA]���O��<�k@���'�#�ݕ>�`�b��6�Fw��%�vS�"���Xw�1ۯ���xd��0��>�.`���.��t��|�U����J����+�5tΞ{~
.X��`R��_e���QvP�u���|������e����n�
��!�:̞�t�����݌����D*�qoO`:�������[�����=��N����h,ѐA ��5�|����@l���Ba"4�e�*=c���B����U0�g�}���T��0���Ό����"=o�����n͕+����i��<��	�#����5��U��d�Wu�fF���>��p�r<5�{��	��<�@5
fh�z���B���J�3����.�vЊ�5�ԛ����R�A�2������>,����!���=�CNb���u{6b��`�$ Ď��s����'C��G_�}zZD�p���(��'�F�|#2u]�v��)|=p��)8� �;�>m����Qo��O#���gQz+��*m����O:�\P&?�6�2+��"���4�Iۅs� \��2Y	�
.��:�/��pv�߈݌i���1̟3��o��Nݩ����1f��t���_����wp�B[Y�:v�"�U�p�T�J��Y�:l�ZC�a���&��l�����-~��:"�co�ꛋg�_�GG�	�b� x`�z�Q����3����0��C@��7s^O�\/�:0�r�����I����)-ewv>���-:-��i���J��~�Po��l�N�>���&ј��?��L�S�)����=���!��?����O�����?����:�Jׄ3���z��t�6��cS�R���W�sEg����nv�W�O�Π"��[�OOm�j4��$xY�f:Vj��e� ����?�9=��|2r�V独�u¶�p$������{^��];�tnK��\�-u�P���؟����:A�ٖ��L��	��}��.�'�QVE`��>n����|�	3�5��d�~�jM�m`�,'�$�R��k�1����rs��~����W�y�U����u��~��q 9��oFP�66�o�?�$fP=�
F�6�zmB%���~!k��Z�-'�#ʔ�q�˧^l�C�ɷ�e��	�Z�^�!�v_��`!�5�\>�g��$���9d+�$���hֺ^���N�?���`��{����`1�+�_WP�>;�}G{�oQ�t�1ݲ�����X+��f#)q�@r�����|�\��2A/��GȤ�z�����o���r���6N�u�װ�+ˈ��������N��N�,�N�_�o��t0(�w�S��,t�-wY:��VV�?�����
�'M_\T]T�ˁc��U�Ii���E6~�㢣� �]��B|W蓬7� >H�]��$]:e���������o��# 3 J�e3�n2���t/��D��kÙf5i�͞'׆��T�3�4���n�=�2_8!>�j�-��|��:�(���jF��� ��p�	���g|
��e�ڋƬ.K3G�`�6ō�F�4i赸cPn[�+�hx�"O_tCwKGv��{��i�Z�g��Iʱ�l+�-��Qg�b�ԯ3��'Y�@\���r�����\y�X��x��𐽟��죌)�;d�Og^�Q��.e冂�A�j�J���]($Z��C��3����V�'��`#%-��q�a~x���k�s��=i��D����`��#u�2\~����ݼ<�3�.�k��ps�co���k7^I��	�y=pg���*�֜*S__3����G��n���~�j�id�`q�g�J�1�A�^�������OJ���#B������J�x=�[��#x��g�f��rgB��s<`�	@��N���<K<@Ƴ
�;=�h,�؍/H�\����G�ܖ{��0�XD]�tנ��ε�N���-��h],����str/�ѱ� ȟ��w%{�_��o�>,��
�Y���;��^�k�s�T��51�ʹ��G�Buz��y��3đ���13t����a0z����;Wo�(1t=��̐'�a1s �g�8�������_
aѩ��0t<~���`��AA�p9�@X�.0�}E� �|�ȟ_, D�*j����lx0"3p����-����h�i���[{�N�e#|'ŏa�-.o�¾Hbψ���;2w�d�@M I�~�� a��ԎJ�� �a#Ž�g��QpO��i$�mDh���xC-m��ΛI�]N��:r����oζJ�Qe�Y�6�:��j6P'm���.;&T�^������ �]�O��ZL=
��r����& 9��؜�������Er��#ݸ����"���+A��T+��2��No���W����+�>/�a�o�r��_��ߡ���V�     
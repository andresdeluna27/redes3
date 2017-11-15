 #!/bin/bash
#Script de respaldos
FECHA=$(date +%F+%T)
USUARIO=$(whoami)
DIRECTORIOS="/home/prueba"
function Completo {
    #tar -cvzf /home/prueba/respaldo-$FECHA.tgz $DIRECTORIOS
	tar -cpvzf "/home/prueba-inc/fullbackup_`date +%d%m%Y`.tgz" -g /home/prueba-inc/backup.snap /home/prueba/*
	tar -cpvzf "/home/prueba2-dif/fullbackup_DIF_`date +%d%m%Y`.tgz" /home/prueba2/*
	#tar -cpvzf "inc_backup_`date +%d%m%Y`.tgz" -g /home/alumno/Documentos/R_Inc/backup.snap /home/alumno/Documentos/Files/*
    
    #if [ $? -ne 0 ]; then
     #   logger "Error en el respaldo de $FECHA"
      #  return 1
    #else
     #   echo $FECHA &gt; /home/mia/repo/ult_resp
      #  return 0
    #fi
}

function Incre {
	if [ -e /home/prueba-inc/backup.snap ]; then
		tar -cpvzf "/home/prueba-inc/inc_backup_`date +%d%m%Y`.tgz" -g /home/prueba-inc/backup.snap /home/prueba/*
	else
		Completo
	fi
}

function Diferencial {
    #if [ -e /home/mia/repo/ult_resp ]; then
    if [ -e /home/prueba2-dif/fullbackup* ]; then
        ULT-RESP=$(cat /home/mia/repo/ult_resp)
        #tar -cvzN $FECHA -f /home/mia/repo/respaldo-$FECHA.tgz $DIRECTORIOS
	
	tar -cpvzf "/home/prueba2-dif/dif1_backup_`date +%d%m%Y`.tar.gz" /home/prueba2/* -N 14-nov-17
            #if [ $? -ne 0 ]; then
                    #logger "Error en el respaldo de $FECHA"
                    #return 1                                  
	    #else
                    #echo $FECHA &gt; /home/mia/repo/ult_resp                       
		    #return 0
            #fi
    else
        Completo
    fi   
}

#main
if [ $# -ne 1 ]; then
    echo "Error, numero de opciones incorrectas"
    echo "Uso: $0 -c ó $0 -d $0 -i"
    exit 1
else
    if [ $USUARIO != root ]; then
        echo "Error, debe ser root para ejecutar este programa"
        exit 2
    fi
    case $1 in
        -c)Completo;;
        -d)Diferencial;;
	-i)Incre;;
        *) echo "Opcion incorrecta";exit 1;;
    esac
fi 

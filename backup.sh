 #!/bin/bash
#Script de respaldos
FECHA=$(date +%F+%T)
USUARIO=$(whoami)
DIRECTORIOS="/home/prueba"
function Completo {
    tar -cvzf /home/prueba/respaldo-$FECHA.tgz $DIRECTORIOS
    
    #if [ $? -ne 0 ]; then
     #   logger "Error en el respaldo de $FECHA"
      #  return 1
    #else
     #   echo $FECHA &gt; /home/mia/repo/ult_resp
      #  return 0
    #fi
}

function Diferencial {
    if [ -e /home/mia/repo/ult_resp ]; then
        ULT-RESP=$(cat /home/mia/repo/ult_resp)
        tar -cvzN $FECHA -f /home/mia/repo/respaldo-$FECHA.tgz $DIRECTORIOS
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
    echo "Uso: $0 -c ó $0 -d"
    exit 1
else
    if [ $USUARIO != root ]; then
        echo "Error, debe ser root para ejecutar este programa"
        exit 2
    fi
    case $1 in
        -c)Completo;;
        -d)Diferencial;;
        *) echo "Opcion incorrecta";exit 1;;
    esac
fi 

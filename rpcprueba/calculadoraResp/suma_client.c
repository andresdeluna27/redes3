/*
 * This is sample code generated by rpcgen.
 * These are only templates and you can use them
 * as a guideline for developing your own functions.
 */

#include "suma.h"


void
suma_prg_1(char *host)
{
	CLIENT *clnt;
	int  *result_1;
	sumandos  suma_1_arg;
	suma_1_arg.op=-1;
	while(suma_1_arg.op!=0){
		printf("seleciona la operacion:\n1--suma\n2--resta\n3--division\n4--multi\n5--seno\n6--coseno\n7--tangente\n0--salir\n");
		scanf("%d",&suma_1_arg.op);
		printf("digito 1: ");
		scanf("%d",&suma_1_arg.sumando1);
		if(suma_1_arg.op<5){
		printf("digito 2: ");
		scanf("%d",&suma_1_arg.sumando2);
		}
	

#ifndef	DEBUG
	clnt = clnt_create (host, SUMA_PRG, SUMA_VER, "udp");
	if (clnt == NULL) {
		clnt_pcreateerror (host);
		exit (1);
	}
#endif	/* DEBUG */

	result_1 = suma_1(&suma_1_arg, clnt);
	if (result_1 == (int *) NULL) {
		clnt_perror (clnt, "call failed");
	}
#ifndef	DEBUG
	clnt_destroy (clnt);
#endif	 /* DEBUG */
	printf("resultado: %d \n",*result_1);
	}
}


int
main (int argc, char *argv[])
{
	char *host;

	if (argc < 2) {
		printf ("usage: %s server_host\n", argv[0]);
		exit (1);
	}
	host = argv[1];
	suma_prg_1 (host);
exit (0);
}

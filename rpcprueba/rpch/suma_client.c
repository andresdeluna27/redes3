/*
 * This is sample code generated by rpcgen.
 * These are only templates and you can use them
 * as a guideline for developing your own functions.
 */

#include "suma.h"


void
suma_prg_2(char *host)
{
	CLIENT *clnt;
	int  *result_1;
	sumandos  suma_2_arg;
	printf("digitos a sumar: a: ");
	scanf("%d",&suma_2_arg.sumando1);
	printf("b: ");
	scanf("%d",&suma_2_arg.sumando2);
	printf("c: ");
	scanf("%d",&suma_2_arg.sumando3);
	printf("d: ");
	scanf("%d",&suma_2_arg.sumando4);

#ifndef	DEBUG
	clnt = clnt_create (host, SUMA_PRG, SUMA_VER, "udp");
	if (clnt == NULL) {
		clnt_pcreateerror (host);
		exit (1);
	}
#endif	/* DEBUG */

	result_1 = suma_2(&suma_2_arg, clnt);
	if (result_1 == (int *) NULL) {
		clnt_perror (clnt, "call failed");
	}
#ifndef	DEBUG
	clnt_destroy (clnt);
#endif	 /* DEBUG */
	printf("Suma: %d ",*result_1);
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
	suma_prg_2 (host);
exit (0);
}

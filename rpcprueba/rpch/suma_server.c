/*
 * This is sample code generated by rpcgen.
 * These are only templates and you can use them
 * as a guideline for developing your own functions.
 */

#include "suma.h"

int *
suma_2_svc(sumandos *argp, struct svc_req *rqstp)
{
	static int  result;

	/*
	 * insert server code here
	 */
	result=argp->sumando1 + argp->sumando2 + argp->sumando3 + argp->sumando4;

	return &result;
}

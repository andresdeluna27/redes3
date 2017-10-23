/*
 * Please do not edit this file.
 * It was generated using rpcgen.
 */

#ifndef _SUMA_H_RPCGEN
#define _SUMA_H_RPCGEN

#include <rpc/rpc.h>


#ifdef __cplusplus
extern "C" {
#endif


struct sumandos {
	int sumando1;
	int sumando2;
};
typedef struct sumandos sumandos;

#define SUMA_PRG 0x20000002
#define SUMA_VER 1

#if defined(__STDC__) || defined(__cplusplus)
#define suma 1
extern  int * suma_1(sumandos *, CLIENT *);
extern  int * suma_1_svc(sumandos *, struct svc_req *);
extern int suma_prg_1_freeresult (SVCXPRT *, xdrproc_t, caddr_t);

#else /* K&R C */
#define suma 1
extern  int * suma_1();
extern  int * suma_1_svc();
extern int suma_prg_1_freeresult ();
#endif /* K&R C */

/* the xdr functions */

#if defined(__STDC__) || defined(__cplusplus)
extern  bool_t xdr_sumandos (XDR *, sumandos*);

#else /* K&R C */
extern bool_t xdr_sumandos ();

#endif /* K&R C */

#ifdef __cplusplus
}
#endif

#endif /* !_SUMA_H_RPCGEN */

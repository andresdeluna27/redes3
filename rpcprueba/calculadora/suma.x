struct sumandos
{
	float sumando1;
	float sumando2;
	int op;
};
program SUMA_PRG {
	version SUMA_VER {
		float suma (sumandos) = 1;
	} = 1;
} = 0x20000002;

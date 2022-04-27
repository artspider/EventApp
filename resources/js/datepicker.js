export default () => ({
    fecha_inicio: null,
    fecha_cierre: null,
    appInit: function () {
        console.log("iniciando");
    },
    doChangeInicio: function () {
        this.fecha_inicio = this.$refs.fecha_inicio.value;
        this.$wire.set("fecha_inicio", this.fecha_inicio, true);
        console.log("ok");
    },
    doChangeCierre: function () {
        this.fecha_cierre = this.$refs.fecha_cierre.value;
        this.$wire.set("fecha_cierre", this.fecha_cierre, true);
    },
    doChangeFecha: function () {
        this.fecha = this.$refs.fecha.value;
        this.$wire.set("fecha", this.fecha, true);
    },
});

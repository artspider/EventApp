require("./bootstrap");

import datepicker from "./datepicker";

import Alpine from "alpinejs";

Alpine.data("datepicker", datepicker);

window.Alpine = Alpine;

Alpine.start();

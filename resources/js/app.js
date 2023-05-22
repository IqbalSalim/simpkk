require("./bootstrap");

import Alpine from "alpinejs";
import intersect from "@alpinejs/intersect";
import ApexCharts from "apexcharts";
window.ApexCharts = ApexCharts;

Alpine.plugin(intersect);
window.Alpine = Alpine;

Alpine.start();

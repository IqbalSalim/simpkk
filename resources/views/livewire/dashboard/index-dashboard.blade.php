<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div id="content">
        <div class="grid grid-cols-4 rounded-lg gap-x-4">
            <div class="flex flex-row justify-between p-2 bg-blue-500 rounded-lg shadow-lg gap-x-4 shadow-blue-500">
                <div class="flex flex-col gap-y-4">
                    <div class="font-bold text-white">
                        <p class="text-sm">JUMLAH PENDUDUK</p>
                        <p class="text-4xl">{{ $jumlah_penduduk }}</p>
                    </div>
                    <div class="font-bold">Update Hari Ini</div>
                </div>
                <div class="flex items-center">

                    <div
                        class="flex items-center justify-center w-20 h-20 text-center transform bg-white rounded-full group hover:bg-blue-600 ">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-blue-500 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                    </div>

                </div>
            </div>
            <div class="flex flex-row justify-between p-2 bg-green-500 rounded-lg shadow-lg gap-x-4 shadow-green-500">
                <div class="flex flex-col gap-y-4">
                    <div class="font-bold text-white">
                        <p class="text-sm">JUMLAH KK</p>
                        <p class="text-4xl">{{ $jumlah_KK }}</p>
                    </div>
                    <div class="font-bold">Update Hari Ini</div>
                </div>
                <div class="flex items-center">

                    <div
                        class="flex items-center justify-center w-20 h-20 text-center bg-white rounded-full group hover:bg-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-green-500 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-between p-2 bg-yellow-500 rounded-lg shadow-lg gap-x-4 shadow-yellow-500">
                <div class="flex flex-col gap-y-4">
                    <div class="font-bold text-white">
                        <p class="text-sm">JUMLAH PUS</p>
                        <p class="text-4xl">{{ $jumlah_pus }}</p>
                    </div>
                    <div class="font-bold">Update Hari Ini</div>
                </div>
                <div class="flex items-center">
                    <div
                        class="flex items-center justify-center w-20 h-20 text-center bg-white rounded-full group hover:bg-yellow-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-yellow-500 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-between p-2 bg-red-500 rounded-lg shadow-lg gap-x-4 shadow-red-500">
                <div class="flex flex-col gap-y-4">
                    <div class="font-bold text-white">
                        <p class="text-sm">JUMLAH DASAWISMA</p>
                        <p class="text-4xl">{{ $jumlah_dasawisma }}</p>
                    </div>
                    <div class="font-bold">Update Hari Ini</div>
                </div>
                <div class="flex items-center">
                    <div
                        class="flex items-center justify-center w-20 h-20 text-center bg-white rounded-full group hover:bg-red-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-red-500 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 mt-4 gap-x-10">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 border rounded-lg dark:text-gray-100 border-primary-800">
                    <div class="col-span-3">
                        <label for="filter_keluarga" class="">Filter Grafik (Data Basis Keluarga)</label>
                        <select wire:model='filter_keluarga' wire:change='updateChartKeluarga()' id="filter_keluarga"
                            class="accent-secondary-500">
                            <option value="">-- Pilih --</option>
                            <option value="jumlah_KK">Kepala Keluarga</option>
                            <option value="pus">Pus</option>
                        </select>
                    </div>
                    <div class="col-span-1 mt-4 bg-white rounded-lg" style="height: 28rem;">
                        <div id="keluarga">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('chart-script')
    <script>
        window.addEventListener('name-updated', event => {
        alert('Name updated to: ' + event.detail.newName);
        })

        var options = {
        series: [{
        name: 'Inflation',
        data: @js($data)
        }],
        chart: {
        height: 350,
        type: 'bar',
        },
        plotOptions: {
        bar: {
        borderRadius: 10,
        dataLabels: {
        position: 'top', // top, center, bottom
        },
        }
        },
        dataLabels: {
        enabled: true,
        offsetY: -20,
        style: {
        fontSize: '12px',
        colors: ["#304758"]
        }
        },
        
        xaxis: {
        categories: @js($kategori),
        position: 'top',
        axisBorder: {
        show: false
        },
        axisTicks: {
        show: false
        },
        crosshairs: {
        fill: {
        type: 'gradient',
        gradient: {
        colorFrom: '#D8E3F0',
        colorTo: '#BED1E6',
        opacityFrom: 0.4,
        opacityTo: 0.5,
        }
        }
        },
        tooltip: {
        enabled: true,
        }
        },
        yaxis: {
        axisBorder: {
        show: false
        },
        axisTicks: {
        show: false,
        },
        labels: {
        show: false,
        }
        
        },
        title: {
        text: @js($judul),
        floating: true,
        offsetY: 330,
        align: 'center',
        style: {
        color: '#444'
        }
        }
        };
        
        var chart = new ApexCharts(document.querySelector("#keluarga"), options);
        chart.render();

        window.addEventListener('updateChartSeries', event => {
            chart.updateOptions({
                series:[
                    {
                        name: '',
                        data: event.detail.data
                    }
                ],
                xaxis: {
                    categories: event.detail.kategori
                },
                title: {
                    text: event.detail.judul
                }
            })
        });
    </script>

    @endpush
</div>
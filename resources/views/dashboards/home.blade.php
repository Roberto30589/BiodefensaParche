@extends('templates.main')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        #chartjs-tooltip{
            background-color: floralwhite;
            padding: 5px;
            border-radius: 10px;
            font-size:1.2rem;
        }
        body{
            overflow-x: hidden;
        }
        .graf-container{
            display: flex;
        }
        .graf-legend{
            flex-grow: 1;
        }
        .graf-dona{
            position: relative; 
            height:100px; 
            width:100px
        }
        .graf-bar{
            position: relative; 
            height:100px; 
            width:200px
        }
        .row{
            margin:0;
            padding: 0;
        }
        .col{
            margin:0;
            padding: 0;
        }

        .flex-div{
			display:flex;
			flex-direction:row;
			flex-wrap:wrap;
		}
		.flex-div .folder{
			margin:1rem;
			height:5rem;
		}
		
		.carpeta-container{
			margin:20px;
			display:flex;
			flex-direction: column;
			align-items:center;
            text-decoration: none;
		}
		.carpeta-container .carpeta-text{
			font-size:2rem;
			color:#455a64;  
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			max-width: 250px;
		}
		.carpeta-container:hover .folder-front{
			transform: skewX(-15deg);
		}
		.carpeta-container:hover .folder-doc{
			transform: translateY(-250px);
		}
		.folder-back{
			fill:#263238;
		}
		.folder-doc{
			-webkit-transition: 0.2s linear 0.2s;
    		-moz-transition: 0.2s linear 0.2s;
			-o-transition: 0.2s linear 0.2s;
			stroke:black;
		}
		.folder-front{
			fill:#607d8b;
			transform-origin:100% 100%;
			-webkit-transition: 0.2s linear;
    		-moz-transition: 0.2s linear;
    		-o-transition: 0.2s linear;
		}
    </style>
    <div>
        <div class="row">
            <div class="col ">
                <a class="carpeta-container" href="{{ url('main/file/1') }}">
                    <svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="-221 -100 1590 1066" style="width:250px;position:relative">
                        <path class="folder-back" d="M1133.86,179.053c0,-28.803 -23.349,-52.152 -52.151,-52.152c-144.761,0 -540.966,0 -540.966,0l-97.741,-126.901l-389.107,0c-13.832,0 -27.097,5.494 -36.877,15.275c-9.78,9.78 -15.275,23.045 -15.275,36.876c0,167.933 0,693.432 0,861.365c0,13.831 5.495,27.096 15.275,36.876c9.78,9.781 23.045,15.275 36.877,15.275c189.243,0 838.57,0 1027.81,0c13.831,0 27.096,-5.494 36.876,-15.275c9.78,-9.78 15.275,-23.045 15.275,-36.876c0,-150.439 0,-584.025 0,-734.463Z"/>
                        <g class="folder-doc"><rect x="62.581" y="157.758" width="990.874" height="724.902" style="fill:#f9f9f9;"/>
                            <path d="M224.25,265.087l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                            <path d="M224.25,373.112l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                            <path d="M224.25,488.243l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                            <path d="M224.25,610.481l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                        </g>
                        <g class="folder-front">
                            <path d="M1132.23,179.053c-0.029,-13.832 -5.551,-27.097 -15.352,-36.877c-9.8,-9.78 -23.076,-15.275 -36.908,-15.275c-189.243,0 -838.57,0 -1027.81,0c-13.831,0 -27.085,5.495 -36.845,15.275c-9.76,9.78 -15.227,23.045 -15.198,36.877c0.312,150.438 1.211,584.024 1.522,734.463c0.029,13.831 5.551,27.096 15.352,36.876c9.8,9.781 23.076,15.275 36.908,15.275c189.243,0 838.57,0 1027.81,0c13.831,0 27.085,-5.494 36.845,-15.275c9.759,-9.78 15.227,-23.045 15.198,-36.876c-0.312,-150.439 -1.211,-584.025 -1.522,-734.463Z"/>
                            <image x="60" y="170" width="1020" height="740" href=""/>
                        </g>
                    </svg>
                    <span class="carpeta-text">Informes</span>
                </a>
            </div>
            <div class="col ">

                <a class="carpeta-container" href="{{ url('main/file/2') }}">
                    <svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="-221 -100 1590 1066" style="width:250px;position:relative">
                        <path class="folder-back" d="M1133.86,179.053c0,-28.803 -23.349,-52.152 -52.151,-52.152c-144.761,0 -540.966,0 -540.966,0l-97.741,-126.901l-389.107,0c-13.832,0 -27.097,5.494 -36.877,15.275c-9.78,9.78 -15.275,23.045 -15.275,36.876c0,167.933 0,693.432 0,861.365c0,13.831 5.495,27.096 15.275,36.876c9.78,9.781 23.045,15.275 36.877,15.275c189.243,0 838.57,0 1027.81,0c13.831,0 27.096,-5.494 36.876,-15.275c9.78,-9.78 15.275,-23.045 15.275,-36.876c0,-150.439 0,-584.025 0,-734.463Z"/>
                        <g class="folder-doc"><rect x="62.581" y="157.758" width="990.874" height="724.902" style="fill:#f9f9f9;"/>
                            <path d="M224.25,265.087l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                            <path d="M224.25,373.112l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                            <path d="M224.25,488.243l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                            <path d="M224.25,610.481l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                        </g>
                        <g class="folder-front">
                            <path d="M1132.23,179.053c-0.029,-13.832 -5.551,-27.097 -15.352,-36.877c-9.8,-9.78 -23.076,-15.275 -36.908,-15.275c-189.243,0 -838.57,0 -1027.81,0c-13.831,0 -27.085,5.495 -36.845,15.275c-9.76,9.78 -15.227,23.045 -15.198,36.877c0.312,150.438 1.211,584.024 1.522,734.463c0.029,13.831 5.551,27.096 15.352,36.876c9.8,9.781 23.076,15.275 36.908,15.275c189.243,0 838.57,0 1027.81,0c13.831,0 27.085,-5.494 36.845,-15.275c9.759,-9.78 15.227,-23.045 15.198,-36.876c-0.312,-150.439 -1.211,-584.025 -1.522,-734.463Z"/>
                            <image x="60" y="170" width="1020" height="740" href=""/>
                        </g>
                    </svg>
                    <span class="carpeta-text">Laboratorios</span>
                </a>
            </div>
            <div class="col ">

                <a class="carpeta-container" href="{{ url('main/file/3') }}">
                    <svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="-221 -100 1590 1066" style="width:250px;position:relative">
                        <path class="folder-back" d="M1133.86,179.053c0,-28.803 -23.349,-52.152 -52.151,-52.152c-144.761,0 -540.966,0 -540.966,0l-97.741,-126.901l-389.107,0c-13.832,0 -27.097,5.494 -36.877,15.275c-9.78,9.78 -15.275,23.045 -15.275,36.876c0,167.933 0,693.432 0,861.365c0,13.831 5.495,27.096 15.275,36.876c9.78,9.781 23.045,15.275 36.877,15.275c189.243,0 838.57,0 1027.81,0c13.831,0 27.096,-5.494 36.876,-15.275c9.78,-9.78 15.275,-23.045 15.275,-36.876c0,-150.439 0,-584.025 0,-734.463Z"/>
                        <g class="folder-doc"><rect x="62.581" y="157.758" width="990.874" height="724.902" style="fill:#f9f9f9;"/>
                            <path d="M224.25,265.087l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                            <path d="M224.25,373.112l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                            <path d="M224.25,488.243l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                            <path d="M224.25,610.481l637.984,0" style="fill:none;stroke:#000;stroke-width:46.56px;"/>
                        </g>
                        <g class="folder-front">
                            <path d="M1132.23,179.053c-0.029,-13.832 -5.551,-27.097 -15.352,-36.877c-9.8,-9.78 -23.076,-15.275 -36.908,-15.275c-189.243,0 -838.57,0 -1027.81,0c-13.831,0 -27.085,5.495 -36.845,15.275c-9.76,9.78 -15.227,23.045 -15.198,36.877c0.312,150.438 1.211,584.024 1.522,734.463c0.029,13.831 5.551,27.096 15.352,36.876c9.8,9.781 23.076,15.275 36.908,15.275c189.243,0 838.57,0 1027.81,0c13.831,0 27.085,-5.494 36.845,-15.275c9.759,-9.78 15.227,-23.045 15.198,-36.876c-0.312,-150.439 -1.211,-584.025 -1.522,-734.463Z"/>
                            <image x="60" y="170" width="1020" height="740" href=""/>
                        </g>
                    </svg>
                    <span class="carpeta-text">Certificados</span>
                </a>
            </div>
        </div>
    </div>
    <script src="{{url('/js/chart.options.js')}}"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                datasets: [{
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: opcionesBar
        });

        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [
                    {
                        label: 'Dataset 1',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                    }
                ]
            },
            options: opcionesPie
        });



    </script>
@stop
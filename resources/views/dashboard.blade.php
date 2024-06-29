<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="leaf-sharp"></ion-icon>
                        </span>
                        <span class="title">SIGREENHOUSE</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/dashboard') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/datatraining') }}">
                        <span class="icon">
                            <ion-icon name="analytics-outline"></ion-icon>
                        </span>
                        <span class="title">Data Training</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <h3>Dashboard</h3>
                </div>

                <!-- UserImg -->
                <div class="user">
                    <img src="{{ asset('img/user.png') }}" alt="User Image">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">{{ $conditions->suhu_rata ?? 'N/A' }}°C</div>
                        <div class="cardName">Suhu Rata-rata</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="thermometer-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">{{ $conditions->kelembaban_rata ?? 'N/A' }}%</div>
                        <div class="cardName">Kelembaban Rata-rata</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="water-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">{{ $conditions->intensitas_cahaya ?? 'N/A' }}</div>
                        <div class="cardName">Intensitas Cahaya</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="sunny-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">{{ $conditions->kelembaban_tanah ?? 'N/A' }}%</div>
                        <div class="cardName">Kelembaban Tanah</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="leaf-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="conditionBox">
                <div class="condition">
                    <div>
                        <div class="conditionName">Kipas 1:</div>
                        <div class="output">{{ $conditions->kipas1 ? 'ON' : 'OFF' }}</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="help-buoy-outline"></ion-icon>
                    </div>
                </div>
                <div class="condition">
                    <div>
                        <div class="conditionName">Kipas 2:</div>
                        <div class="output">{{ $conditions->kipas2 ? 'ON' : 'OFF' }}</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="help-buoy-outline"></ion-icon>
                    </div>
                </div>
                <div class="condition">
                    <div>
                        <div class="conditionName">Kipas 3:</div>
                        <div class="output">{{ $conditions->kipas3 ? 'ON' : 'OFF' }}</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="help-buoy-outline"></ion-icon>
                    </div>
                </div>
                <div class="condition">
                    <div>
                        <div class="conditionName">Misting:</div>
                        <div class="output">{{ $conditions->misting ? 'ON' : 'OFF' }}</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="water-outline"></ion-icon>
                    </div>
                </div>
                <div class="condition">
                    <div>
                        <div class="conditionName">Roller motor:</div>
                        <div class="output">{{ $conditions->roller_motor ? 'ON' : 'OFF' }}</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="sync-outline"></ion-icon>
                    </div>
                </div>
                <div class="condition">
                    <div>
                        <div class="conditionName">Cooling Deck:</div>
                        <div class="output">{{ $conditions->cooling_pad ? 'ON' : 'OFF' }}</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="snow-outline"></ion-icon>
                    </div>
                </div>
                <div class="condition">
                    <div>
                        <div class="conditionName">Lampu:</div>
                        <div class="output">{{ $conditions->lampu ? 'ON' : 'OFF' }}</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="sunny-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

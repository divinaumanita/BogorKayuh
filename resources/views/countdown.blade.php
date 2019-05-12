<!-- @extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dasbor</div>

                <div class="card-body">
                     Halo Bikers!

                     <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a href="{{ route('profil') }}" class="btn btn-default"> Profil </a>
                            </div>
                    </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a href="{{ route('riwayatsewa') }}" class="btn btn-default"> Riwayat Sewa </a>
                            </div>
                    </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a href="{{ route('maunyewa') }}" class="btn btn-default">Halaman Penyewaan</a>
                            </div>
                    </div>

                    <script>
    new Vue({
        el: '#election-timer',

        data: {
            clock: {
                years: '',
                months: '',
                days: '',
                hours: '',
                minutes: '',
                seconds: '',
            },
        },

        ready: function() {
            this.getElectionDate(this.clock);
        },

        methods: {
            getElectionDate: function(clock) {
                this.$http.get('/api/v1/election/dates', function(clock) {
                    this.$set('clock', clock); 
                    clock.years   = parseInt(clock.years);
                    clock.months  = parseInt(clock.months);
                    clock.days    = parseInt(clock.days);
                    clock.hours   = parseInt(clock.hours);
                    clock.minutes = parseInt(clock.minutes);
                    clock.seconds = parseInt(clock.seconds);
                    this.startTimer(clock);
                });             
            },

            startTimer: function(clock) {
                var timer = clock;
                setInterval (function() {
                if(timer.seconds === 00 && timer.minutes > 0)
                {
                    timer.minutes = --timer.minutes;
                    timer.seconds = 60;

                } else {
                    timer.seconds = --timer.seconds;
                }
                console.log(timer.seconds);
            }, 1000);

            },
        },
    });

    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
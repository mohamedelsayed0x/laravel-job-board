<x-layout>

    <x-slot:heading>
        Home
    </x-slot:heading>

    <div class="elsayko-box">
        <h1 class="elsayko-name">Elsayko</h1>
    </div>

    <style>
        .elsayko-box {
            min-height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .elsayko-name {
            margin: 0;
            font-family: Arial, sans-serif;
            font-size: clamp(3rem, 10vw, 9rem);
            font-weight: 900;
            letter-spacing: 6px;

            background: linear-gradient(90deg,
                    #7f1d1d,
                    #9a3412,
                    #854d0e,
                    #166534,
                    #155e75,
                    #1e3a8a,
                    #581c87,
                    #831843,
                    #7f1d1d);

            background-size: 400%;
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;

            animation:
                elsaykoMove 5s ease-in-out infinite,
                elsaykoColors 3s linear infinite,
                elsaykoGlow 1.5s ease-in-out infinite alternate;
        }

        @keyframes elsaykoColors {
            from {
                background-position: 0%;
            }

            to {
                background-position: 400%;
            }
        }

        @keyframes elsaykoMove {
            0% {
                opacity: 0;
                transform: translateX(-120%) rotate(-15deg) scale(0.3);
            }

            20% {
                opacity: 1;
                transform: translateX(0) rotate(5deg) scale(1.1);
            }

            40% {
                transform: translateY(-40px) rotate(-5deg) scale(0.9);
            }

            55% {
                opacity: 0;
                transform: translateY(40px) rotate(180deg) scale(1.3);
            }

            70% {
                opacity: 1;
                transform: translateY(0) rotate(360deg) scale(1);
            }

            100% {
                opacity: 0;
                transform: translateX(120%) rotate(15deg) scale(0.3);
            }
        }

        @keyframes elsaykoGlow {
            from {
                text-shadow:
                    0 0 5px rgba(30, 58, 138, 0.35),
                    0 0 15px rgba(88, 28, 135, 0.3);
            }

            to {
                text-shadow:
                    0 0 10px rgba(127, 29, 29, 0.45),
                    0 0 25px rgba(22, 101, 52, 0.4);
            }
        }
    </style>

</x-layout>

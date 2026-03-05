<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Conciertos')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root{
            --navy:#04142d;
            --blue:#062df6;
            --blue2:#2f6ff3;
            --sky:#52b9f4;
            --mint:#70f1d5;
            --gray:#cccccc;
            --bg:#f7f9fc;
        }

        body{
            background: var(--bg);
            color: var(--navy);
        }

        /* NAVBAR */
        .navbar-custom{
            background: linear-gradient(90deg, var(--navy), var(--blue));
        }
        .navbar-custom .nav-link{
            color: rgba(255,255,255,.9) !important;
            font-weight: 600;
        }
        .navbar-custom .nav-link:hover{
            color: var(--mint) !important;
        }

        /* HERO */
        .hero{
            background:
              radial-gradient(circle at top, rgba(82,185,244,.35), transparent 55%),
              linear-gradient(135deg, var(--navy), var(--blue));
            border-radius: 18px;
            padding: 60px 20px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 14px 40px rgba(4,20,45,.18);
        }
        .hero::after{
            content:"";
            position:absolute;
            inset:-40px;
            background:
              radial-gradient(circle at 20% 30%, rgba(112,241,213,.25), transparent 40%),
              radial-gradient(circle at 80% 20%, rgba(82,185,244,.22), transparent 35%),
              radial-gradient(circle at 80% 80%, rgba(47,111,243,.25), transparent 40%);
            pointer-events:none;
        }
        .hero .content{
            position:relative;
            z-index:1;
            max-width: 900px;
            margin: 0 auto;
            text-align:center;
        }
        .hero h1{
            font-weight: 800;
            letter-spacing: .3px;
        }
        .hero p{
            color: rgba(255,255,255,.9);
            font-size: 1.05rem;
        }

        /* BOTONES */
        .btn-brand{
            background: var(--blue2);
            border: none;
            color: white;
            font-weight: 800;
            padding: 10px 16px;
            border-radius: 12px;
            box-shadow: 0 10px 22px rgba(47,111,243,.25);
        }
        .btn-brand:hover{
            background: var(--blue);
            color: white;
        }

        .btn-outline-brand{
            border: 2px solid var(--blue2);
            color: var(--blue2);
            font-weight: 800;
            padding: 10px 16px;
            border-radius: 12px;
            background: transparent;
        }
        .btn-outline-brand:hover{
            background: var(--blue2);
            color: white;
        }

        .btn-ghost{
            border: 2px solid rgba(255,255,255,.65);
            color: white;
            font-weight: 700;
            padding: 10px 16px;
            border-radius: 12px;
            background: transparent;
        }
        .btn-ghost:hover{
            border-color: var(--mint);
            color: var(--mint);
        }

        /* TITULOS */
        .section-title{
            font-weight: 800;
            color: var(--navy);
        }
        .section-subtitle{
            color: rgba(4,20,45,.75);
        }

        /* TITULO DE PÁGINA */
        .page-title{
            font-weight: 900;
            color: var(--navy);
            letter-spacing: .2px;
        }
        .title-accent{
            width: 90px;
            height: 6px;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--mint), var(--sky), var(--blue2));
            margin: 10px auto 0;
        }

        /* TARJETAS GENERALES */
        .card-soft{
            border: 1px solid rgba(4,20,45,.08);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(4,20,45,.08);
            transition: transform .18s ease, box-shadow .18s ease;
            background: white;
        }
        .card-soft:hover{
            transform: translateY(-4px);
            box-shadow: 0 18px 34px rgba(4,20,45,.14);
        }
        .card-soft .card-img-top{
            height: 180px;
            object-fit: cover;
        }

        /* TARJETAS DE EVENTO */
        .card-event{
            border: 1px solid rgba(4,20,45,.08);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 14px 32px rgba(4,20,45,.10);
            transition: transform .18s ease, box-shadow .18s ease;
            background: white;
        }
        .card-event:hover{
            transform: translateY(-6px);
            box-shadow: 0 20px 42px rgba(4,20,45,.14);
        }
        .card-event .event-img{
            height: 190px;
            object-fit: cover;
            width: 100%;
            display: block;
        }

        /* BADGES */
        .badge-date{
            background: rgba(82,185,244,.18);
            color: var(--navy);
            border: 1px solid rgba(82,185,244,.35);
            font-weight: 800;
        }
        .badge-place{
            background: rgba(112,241,213,.20);
            color: var(--navy);
            border: 1px solid rgba(112,241,213,.45);
            font-weight: 800;
        }
        .badge-mint{
            background: rgba(112,241,213,.25);
            color: var(--navy);
            border: 1px solid rgba(112,241,213,.6);
            font-weight: 700;
        }

        /* FOOTER */
        footer{
            background: var(--navy);
            color: rgba(255,255,255,.85);
        }

        .card-img-wrap{
    height: 240px;              /* mismo alto para todas */
    background: #0b1b3a;        /* un fondo oscuro bonito */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border-top-left-radius: .5rem;
    border-top-right-radius: .5rem;
}

    .card-img-wrap img{
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
    padding: 10px;
    display: block;
}


.hero{
    margin-bottom: 80px;
}

.hero p{
    font-size: 1.2rem;
    max-width: 650px;
    margin: 0 auto 25px;
}

.card-soft{
    transition: all .3s ease;
}

.card-soft:hover{
    transform: translateY(-8px) scale(1.02);
}

.btn-brand{
    padding: 12px 20px;
    font-size: 0.95rem;
}

footer{
    font-size: 0.9rem;
    letter-spacing: .3px;
}

/* ===== EMPUJAR BOTÓN ABAJO EN TARJETAS ===== */

.card.h-100{
    display: flex;
    flex-direction: column;
}

.card.h-100 .card-body{
    display: flex;
    flex-direction: column;
}

.card.h-100 .btn{
    margin-top: auto;
}

</style>
</head>

<body class="d-flex flex-column min-vh-100">

    @include('components.header')

    <main class="container my-4 flex-fill">
        @yield('contenido')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
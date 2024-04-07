<style>

    /* FONTS */
    .oswald {
        font-family: 'Oswald', sans-serif !important;
    }

    .bebas-neue-regular {
        font-family: "Bebas Neue", sans-serif !important;
        font-weight: 400 !important;
        font-style: normal !important;
    }

    /* ANIMATIONS */
    .size-up-animation{
        transition: transform 0.3s ease;
    }

    .size-up-animation:hover{
        transform: scale(1.2);

    }

    .svg-pokeball {
        width: 50px !important;
    }

    .background-custom {
        overflow: hidden !important;
        height: 100vh !important;
        width: 100vw !important;
        background-image: url("{{ asset('background.jpg') }}") !important;
        background-attachment: fixed !important;
        background-position: center !important;
    }

    .title {
        color: white;
        font-size: 3rem;
        font-weight: 500;
        text-shadow: 0 0 15px black;
        transition: transform 0.3s ease !important;
        transition: text-shadow 0.5s ease;
    }

    .title:hover {
        transform: scale(1.2) !important;
        text-shadow: 0 0 25px black;
    }

    .play-title {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .play-title a {
        color: white;
        font-family: 'Oswald', sans-serif;
        font-size: 5rem;
        font-weight: 700;
        text-shadow: 0 0 15px black;
        transition: text-shadow 0.5s ease;
    }

    .play-title a:hover {
        text-shadow: 0 0 30px black;
    }

    .button-28 {
        appearance: none;
        background-color: transparent;
        border: 2px solid #1A1A1A;
        border-radius: 15px;
        box-sizing: border-box;
        color: #3B3B3B;
        cursor: pointer;
        display: inline-block;
        font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 16px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
        min-height: 20px;
        min-width: 0;
        outline: none;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        will-change: transform;
    }

    .button-28:disabled {
        pointer-events: none;
    }

    .button-28:hover {
        color: #fff;
        background-color: #1A1A1A;
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        transform: translateY(-2px);
    }

    .button-28:active {
        box-shadow: none;
        transform: translateY(0);
    }

    .button-17 {
        align-items: center;
        appearance: none;
        background-color: #fff;
        border-radius: 24px;
        border-style: none;
        box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px, rgba(0, 0, 0, .14) 0 6px 10px 0, rgba(0, 0, 0, .12) 0 1px 18px 0;
        box-sizing: border-box;
        color: #3c4043;
        cursor: pointer;
        display: inline-flex;
        fill: currentcolor;
        font-family: "Google Sans", Roboto, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        height: 48px;
        justify-content: center;
        letter-spacing: .25px;
        line-height: normal;
        max-width: 100%;
        overflow: visible;
        padding: 2px 24px;
        position: relative;
        text-align: center;
        text-transform: none;
        text-decoration: none;
        transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1), opacity 15ms linear 30ms, transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: auto;
        will-change: transform, opacity;
        transition: transform 0.3s ease;
        z-index: 0;
    }

    .button-17:hover {
        background: #F6F9FE;
        transform: scale(1.2);
        color: #174ea6;
    }
</style>
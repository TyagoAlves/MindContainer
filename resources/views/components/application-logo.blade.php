<svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <defs>
        <linearGradient id="mc-grad" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#818cf8" stop-opacity="1"/>
            <stop offset="100%" stop-color="#c084fc" stop-opacity="1"/>
        </linearGradient>
        <linearGradient id="mc-grad-light" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#a5b4fc" stop-opacity="0.8"/>
            <stop offset="100%" stop-color="#d8b4fe" stop-opacity="0.4"/>
        </linearGradient>
    </defs>

    <rect x="10" y="10" width="180" height="180" rx="30" fill="url(#mc-grad)" opacity="0.1"/>
    <rect x="10" y="10" width="180" height="180" rx="30" stroke="url(#mc-grad-light)" stroke-width="2"/>

    <polygon points="100,30 170,70 100,110 30,70" fill="url(#mc-grad)" opacity="0.9"/>
    <polygon points="100,110 170,70 170,130 100,170" fill="url(#mc-grad)" opacity="0.6"/>
    <polygon points="100,110 30,70 30,130 100,170" fill="url(#mc-grad)" opacity="0.3"/>

    <polygon points="100,30 170,70 100,110 30,70" stroke="white" stroke-width="1.5" stroke-opacity="0.4" fill="none"/>
    <polygon points="100,110 170,70 170,130 100,170" stroke="white" stroke-width="1.5" stroke-opacity="0.4" fill="none"/>
    <polygon points="100,110 30,70 30,130 100,170" stroke="white" stroke-width="1.5" stroke-opacity="0.4" fill="none"/>
</svg>
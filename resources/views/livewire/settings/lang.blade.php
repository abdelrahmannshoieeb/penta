<div style="margin: 0;">
    <div style="display: flex; align-items: center; gap: 10px;">
    <span style="font-size: 14px; font-weight: bold;">
            @if($currentLocale === 'en')
                EN
            @else
                AR
            @endif
        </span>
        <!-- Toggle Switch -->
        <input 
            type="checkbox" 
            id="switch" 
            @if($currentLocale === 'ar') checked @endif
            wire:click="toggleLanguage"
            style="height: 0; width: 0; visibility: hidden;" 
        />
        <label for="switch" style="
            cursor: pointer;
            text-indent: -9999px;
            width: 60px; /* Adjusted for smaller size */
            height: 30px; /* Adjusted for smaller size */
            background: {{ $currentLocale === 'en' ? 'grey' : '#bada55' }};
            border-radius: 30px; /* Adjusted for smaller size */
            position: relative;
            display: flex;
            align-items: center;
        ">
            <span style="
                content: '';
                position: absolute;
                top: 4.25px; /* Reduced by 25% (5px * 0.75) */
                @if($currentLocale === 'en')
                    left: 1.75px; /* Reduced by 25% (5px * 0.75) */
                @else
                    left: calc(100% - 27.25px); /* Adjusted for smaller size */
                @endif
                width: 22.5px; /* Reduced by 25% (90px * 0.75) */
                height: 22.5px; /* Reduced by 25% (90px * 0.75) */
                background: #fff;
                border-radius: 22.5px; /* Reduced by 25% (90px * 0.75) */
                transition: 0.3s;
            "></span>
        </label>

        <!-- Text (AR/EN) -->
     
    </div>
</div>
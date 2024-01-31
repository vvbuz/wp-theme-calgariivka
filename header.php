<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php
                                        wp_enqueue_scripts(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container">
        <header>
            <a href="/">
                <svg height="25" viewBox="0 0 411 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 74L5 73.1209L6 72.2557L7 71.418L8 70.6211L9 69.8774L10 69.1987L11 68.5957L12 68.078L13 67.6537L14 67.3294L15 67.1104L16 67H17L18 67.1104L19 67.3294L20 67.6537L21 68.078L22 68.5957L23 69.1987L24 69.8774L25 70.6211L26 71.418L27 72.2557L28 73.1209L29 74L30 74.8791L31 75.7443L32 76.582L33 77.3789L34 78.1226L35 78.8013L36 79.4043L37 79.922L38 80.3463L39 80.6706L40 80.8896L41 81H42L43 80.8896L44 80.6706L45 80.3463L46 79.922L47 79.4043L48 78.8013L49 78.1226L50 77.3789L51 76.582L52 75.7443L53 74.8791L54 74L55 73.1209L56 72.2557L57 71.418L58 70.6211L59 69.8774L60 69.1987L61 68.5957L62 68.078L63 67.6537L64 67.3294L65 67.1104L66 67H67L68 67.1104L69 67.3294L70 67.6537L71 68.078L72 68.5957L73 69.1987L74 69.8774L75 70.6211L76 71.418L77 72.2557L78 73.1209L79 74L80 74.8791L81 75.7443L82 76.582L83 77.3789L84 78.1226L85 78.8013L86 79.4043L87 79.922L88 80.3463L89 80.6706L90 80.8896L91 81H92L93 80.8896L94 80.6706L95 80.3463L96 79.922L97 79.4043L98 78.8013L99 78.1226L100 77.3789L101 76.582L102 75.7443L103 74.8791L104 74L105 73.1209L106 72.2557L107 71.418L108 70.6211L109 69.8774L110 69.1987L111 68.5957L112 68.078L113 67.6537L114 67.3294L115 67.1104L116 67H117L118 67.1104L119 67.3294L120 67.6537L121 68.078L122 68.5957L123 69.1987L124 69.8774L125 70.6211L126 71.418L127 72.2557L128 73.1209L129 74L130 74.8791L131 75.7443L132 76.582L133 77.3789L134 78.1226L135 78.8013L136 79.4043L137 79.922L138 80.3463L139 80.6706L140 80.8896L141 81H142L143 80.8896L144 80.6706L145 80.3463L146 79.922L147 79.4043L148 78.8013L149 78.1226L150 77.3789L151 76.582L152 75.7443L153 74.8791L154 74L155 73.1209L156 72.2557L157 71.418L158 70.6211L159 69.8774L160 69.1987L161 68.5957L162 68.078L163 67.6537L164 67.3294L165 67.1104L166 67H167L168 67.1104L169 67.3294L170 67.6537L171 68.078L172 68.5957L173 69.1987L174 69.8774L175 70.6211L176 71.418L177 72.2557L178 73.1209L179 74L180 74.8791L181 75.7443L182 76.582L183 77.3789L184 78.1226L185 78.8013L186 79.4043L187 79.922L188 80.3463L189 80.6706L190 80.8896L191 81H192L193 80.8896L194 80.6706L195 80.3463L196 79.922L197 79.4043L198 78.8013L199 78.1226L200 77.3789L201 76.582L202 75.7443L203 74.8791L204 74L205 73.1209L206 72.2557L207 71.418L208 70.6211L209 69.8774L210 69.1987L211 68.5957L212 68.078L213 67.6537L214 67.3294L215 67.1104L216 67H217L218 67.1104L219 67.3294L220 67.6537L221 68.078L222 68.5957L223 69.1987L224 69.8774L225 70.6211L226 71.418L227 72.2557L228 73.1209L229 74L230 74.8791L231 75.7443L232 76.582L233 77.3789L234 78.1226L235 78.8013L236 79.4043L237 79.922L238 80.3463L239 80.6706L240 80.8896L241 81H242L243 80.8896L244 80.6706L245 80.3463L246 79.922L247 79.4043L248 78.8013L249 78.1226L250 77.3789L251 76.582L252 75.7443L253 74.8791L254 74L255 73.1209L256 72.2557L257 71.418L258 70.6211L259 69.8774L260 69.1987L261 68.5957L262 68.078L263 67.6537L264 67.3294L265 67.1104L266 67H267L268 67.1104L269 67.3294L270 67.6537L271 68.078L272 68.5957L273 69.1987L274 69.8774L275 70.6211L276 71.418L277 72.2557L278 73.1209L279 74L280 74.8791L281 75.7443L282 76.582L283 77.3789L284 78.1226L285 78.8013L286 79.4043L287 79.922L288 80.3463L289 80.6706L290 80.8896L291 81H292L293 80.8896L294 80.6706L295 80.3463L296 79.922L297 79.4043L298 78.8013L299 78.1226L300 77.3789L301 76.582L302 75.7443L303 74.8791L304 74L305 73.1209L306 72.2557L307 71.418L308 70.6211L309 69.8774L310 69.1987L311 68.5957L312 68.078L313 67.6537L314 67.3294L315 67.1104L316 67H317L318 67.1104L319 67.3294L320 67.6537L321 68.078L322 68.5957L323 69.1987L324 69.8774L325 70.6211L326 71.418L327 72.2557L328 73.1209L329 74L330 74.8791L331 75.7443L332 76.582L333 77.3789L334 78.1226L335 78.8013L336 79.4043L337 79.922L338 80.3463L339 80.6706L340 80.8896L341 81H342L343 80.8896L344 80.6706L345 80.3463L346 79.922L347 79.4043L348 78.8013L349 78.1226L350 77.3789L351 76.582L352 75.7443L353 74.8791L354 74L355 73.1209L356 72.2557L357 71.418L358 70.6211L359 69.8774L360 69.1987L361 68.5957L362 68.078L363 67.6537L364 67.3294L365 67.1104L366 67H367L368 67.1104L369 67.3294L370 67.6537L371 68.078L372 68.5957L373 69.1987L374 69.8774L375 70.6211L376 71.418L377 72.2557L378 73.1209L379 74L380 74.8791L381 75.7443L382 76.582L383 77.3789L384 78.1226L385 78.8013L386 79.4043L387 79.922L388 80.3463L389 80.6706L390 80.8896L391 81H392L393 80.8896L394 80.6706L395 80.3463L396 79.922L397 79.4043L398 78.8013L399 78.1226L400 77.3789L401 76.582L402 75.7443L403 74.8791" stroke="#CF0404" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M26.2 4.557C18.6567 4.557 14.885 11.8327 14.885 26.384V32.151C14.885 39.0617 15.8827 44.488 17.878 48.43C19.8733 52.3233 22.8177 54.27 26.711 54.27C32.0643 54.27 36.9797 49.0627 41.457 38.648H42.771L42.26 54.927H41.457C41.165 54.3917 40.8973 54.0267 40.654 53.832C40.4107 53.5887 40.0457 53.467 39.559 53.467C39.121 53.467 37.369 53.8563 34.303 54.635C31.237 55.365 28.1223 55.73 24.959 55.73C17.0263 55.73 10.87 53.5887 6.49 49.306C2.15866 45.0233 -0.00700378 38.5993 -0.00700378 30.034C-0.00700378 21.42 2.256 14.777 6.782 10.105C11.3567 5.433 17.4887 3.097 25.178 3.097C28.1467 3.097 31.0423 3.48633 33.865 4.265C36.7363 4.995 38.4153 5.36 38.902 5.36C39.3887 5.36 39.7537 5.26267 39.997 5.068C40.2403 4.82467 40.508 4.43534 40.8 3.9H41.603L42.187 19.741H40.873C38.683 14.8257 36.42 11.0783 34.084 8.499C31.7967 5.871 29.1687 4.557 26.2 4.557Z" fill="black" />
                    <path d="M67.8414 37.845H69.9584V32.224C69.9584 27.6007 69.6907 24.5103 69.1554 22.953C68.6687 21.347 67.6954 20.544 66.2354 20.544C65.3594 20.544 64.5564 20.7873 63.8264 21.274C63.145 21.712 62.8044 22.3447 62.8044 23.172C62.8044 23.9507 62.9504 24.7537 63.2424 25.581H65.0674C65.4567 26.603 65.6514 27.844 65.6514 29.304C65.6514 30.7153 65.043 31.9563 63.8264 33.027C62.6097 34.049 61.0767 34.56 59.2274 34.56C55.042 34.56 52.9494 32.5403 52.9494 28.501C52.9494 22.515 58.035 19.522 68.2064 19.522C73.9977 19.522 77.9884 20.5197 80.1784 22.515C82.417 24.4617 83.5364 28.063 83.5364 33.319V48.138C83.5364 50.6687 84.242 51.934 85.6534 51.934C87.308 51.934 88.2814 49.4277 88.5734 44.415L89.6684 44.488C89.4737 48.7707 88.6707 51.715 87.2594 53.321C85.848 54.927 83.5364 55.73 80.3244 55.73C74.4844 55.73 71.1264 53.9293 70.2504 50.328C69.6177 52.1773 68.6687 53.54 67.4034 54.416C66.138 55.292 64.2887 55.73 61.8554 55.73C54.6527 55.73 51.0514 52.7857 51.0514 46.897C51.0514 43.4417 52.414 41.0813 55.1394 39.816C57.9134 38.502 62.1474 37.845 67.8414 37.845ZM64.9214 46.824C64.9214 49.3547 65.043 50.985 65.2864 51.715C65.5784 52.445 66.0894 52.81 66.8194 52.81C67.598 52.81 68.3037 52.2017 68.9364 50.985C69.6177 49.7197 69.9584 47.992 69.9584 45.802V39.013H69.4474C66.43 39.013 64.9214 41.2273 64.9214 45.656V46.824Z" fill="black" />
                    <path d="M92.2838 0.25H110.169V53.686H114.257V55H92.5758V53.686H96.5908V1.564H92.2838V0.25Z" fill="black" />
                    <path d="M147.136 16.456L149.18 15.215C149.472 13.7063 148.888 12.952 147.428 12.952C145.336 12.952 144.289 14.558 144.289 17.77C144.289 19.0353 144.46 20.4953 144.8 22.15C148.499 24.632 150.348 27.8197 150.348 31.713C150.348 35.5577 149.01 38.5507 146.333 40.692C143.657 42.8333 140.031 43.904 135.456 43.904C133.558 43.904 131.587 43.7093 129.543 43.32C127.402 44.6827 126.331 45.7047 126.331 46.386C126.331 47.0673 127.889 47.408 131.003 47.408H138.449C149.497 47.408 155.02 51.3743 155.02 59.307C155.02 63.5897 153.341 66.972 149.983 69.454C146.674 71.9847 141.491 73.25 134.434 73.25C122.414 73.25 116.403 70.6463 116.403 65.439C116.403 62.6163 118.277 60.6697 122.024 59.599L126.404 61.57C126.015 62.9813 125.82 64.3197 125.82 65.585C125.82 69.7703 128.935 71.863 135.164 71.863C138.96 71.863 141.88 71.1573 143.924 69.746C145.968 68.3347 146.99 66.5827 146.99 64.49C146.99 62.3973 146.358 60.986 145.092 60.256C143.876 59.5747 141.418 59.234 137.719 59.234H130.638C126.696 59.234 123.874 58.577 122.17 57.263C120.467 55.949 119.615 54.343 119.615 52.445C119.615 50.4983 120.224 48.8923 121.44 47.627C122.657 46.313 124.823 44.707 127.937 42.809C122.292 41.203 119.469 37.5043 119.469 31.713C119.469 28.063 120.783 25.1187 123.411 22.88C126.039 20.6413 129.981 19.522 135.237 19.522C138.401 19.522 141.102 20.1303 143.34 21.347C143.048 20.033 142.902 18.8407 142.902 17.77C142.902 15.0447 143.632 13.0737 145.092 11.857C146.552 10.6403 148.183 10.032 149.983 10.032C151.784 10.032 153.22 10.5187 154.29 11.492C155.41 12.4167 155.969 13.7063 155.969 15.361C155.969 17.0157 155.531 18.2567 154.655 19.084C153.779 19.8627 152.709 20.252 151.443 20.252C150.227 20.252 149.205 19.9357 148.377 19.303C147.599 18.6217 147.185 17.6727 147.136 16.456ZM131.66 30.107V34.049C131.66 37.3097 131.928 39.524 132.463 40.692C133.047 41.86 133.899 42.444 135.018 42.444C136.186 42.444 137.014 41.8843 137.5 40.765C138.036 39.597 138.303 37.2367 138.303 33.684V30.107C138.303 26.311 138.06 23.829 137.573 22.661C137.087 21.4443 136.259 20.836 135.091 20.836C133.972 20.836 133.12 21.4687 132.536 22.734C131.952 23.9507 131.66 26.4083 131.66 30.107Z" fill="black" />
                    <path d="M173.86 37.845H175.977V32.224C175.977 27.6007 175.709 24.5103 175.174 22.953C174.687 21.347 173.714 20.544 172.254 20.544C171.378 20.544 170.575 20.7873 169.845 21.274C169.163 21.712 168.823 22.3447 168.823 23.172C168.823 23.9507 168.969 24.7537 169.261 25.581H171.086C171.475 26.603 171.67 27.844 171.67 29.304C171.67 30.7153 171.061 31.9563 169.845 33.027C168.628 34.049 167.095 34.56 165.246 34.56C161.06 34.56 158.968 32.5403 158.968 28.501C158.968 22.515 164.053 19.522 174.225 19.522C180.016 19.522 184.007 20.5197 186.197 22.515C188.435 24.4617 189.555 28.063 189.555 33.319V48.138C189.555 50.6687 190.26 51.934 191.672 51.934C193.326 51.934 194.3 49.4277 194.592 44.415L195.687 44.488C195.492 48.7707 194.689 51.715 193.278 53.321C191.866 54.927 189.555 55.73 186.343 55.73C180.503 55.73 177.145 53.9293 176.269 50.328C175.636 52.1773 174.687 53.54 173.422 54.416C172.156 55.292 170.307 55.73 167.874 55.73C160.671 55.73 157.07 52.7857 157.07 46.897C157.07 43.4417 158.432 41.0813 161.158 39.816C163.932 38.502 168.166 37.845 173.86 37.845ZM170.94 46.824C170.94 49.3547 171.061 50.985 171.305 51.715C171.597 52.445 172.108 52.81 172.838 52.81C173.616 52.81 174.322 52.2017 174.955 50.985C175.636 49.7197 175.977 47.992 175.977 45.802V39.013H175.466C172.448 39.013 170.94 41.2273 170.94 45.656V46.824Z" fill="black" />
                    <path d="M222.976 22.296C221.175 22.296 219.594 23.464 218.231 25.8C216.868 28.136 216.187 30.91 216.187 34.122V53.686H221.37V55H198.594V53.686H202.609V21.566H198.594V20.252H216.187V27.26C216.82 24.778 218.036 22.88 219.837 21.566C221.638 20.2033 223.682 19.522 225.969 19.522C228.256 19.522 230.106 20.179 231.517 21.493C232.977 22.7583 233.707 24.5833 233.707 26.968C233.707 29.304 233.172 31.1047 232.101 32.37C231.03 33.6353 229.376 34.268 227.137 34.268C224.947 34.268 223.317 33.538 222.246 32.078C221.224 30.618 221.102 28.5983 221.881 26.019H224.509C225.726 23.537 225.215 22.296 222.976 22.296Z" fill="black" />
                    <path d="M240.943 20.252H245L254.521 53.686H258.609V55H236.928V53.686H240.943V33V20.252Z" fill="black" />
                    <path d="M261.995 20.252H279.88V53.686H283.968V55H262.287V53.686H266.302V21.566H261.995V20.252Z" fill="black" />
                    <path d="M284.706 21.566V20.252H306.533V21.566H301.934L310.694 45.802L318.578 21.566H313.687V20.252H323.542V21.566H320.33L309.526 55H301.204L287.699 21.566H284.706Z" fill="black" />
                    <path d="M349.28 55V53.686H352.638L344.389 36.75L343.002 37.115V53.686H346.36V55H325.409V53.686H329.424V1.564H325.117V0.25H343.002V35.655L344.17 35.217L360.595 21.566H353.733V20.252H368.114V21.566H363.004L354.317 28.939L366.946 53.686H369.574V55H349.28Z" fill="black" />
                    <path d="M388.962 37.845H391.079V32.224C391.079 27.6007 390.811 24.5103 390.276 22.953C389.789 21.347 388.816 20.544 387.356 20.544C386.48 20.544 385.677 20.7873 384.947 21.274C384.265 21.712 383.925 22.3447 383.925 23.172C383.925 23.9507 384.071 24.7537 384.363 25.581H386.188C386.577 26.603 386.771 27.844 386.771 29.304C386.771 30.7153 386.163 31.9563 384.947 33.027C383.73 34.049 382.197 34.56 380.348 34.56C376.162 34.56 374.07 32.5403 374.07 28.501C374.07 22.515 379.155 19.522 389.327 19.522C395.118 19.522 399.109 20.5197 401.299 22.515C403.537 24.4617 404.657 28.063 404.657 33.319V48.138C404.657 50.6687 405.362 51.934 406.774 51.934C408.428 51.934 409.402 49.4277 409.694 44.415L410.789 44.488C410.594 48.7707 409.791 51.715 408.38 53.321C406.968 54.927 404.657 55.73 401.445 55.73C395.605 55.73 392.247 53.9293 391.371 50.328C390.738 52.1773 389.789 53.54 388.524 54.416C387.258 55.292 385.409 55.73 382.976 55.73C375.773 55.73 372.172 52.7857 372.172 46.897C372.172 43.4417 373.534 41.0813 376.26 39.816C379.034 38.502 383.268 37.845 388.962 37.845ZM386.042 46.824C386.042 49.3547 386.163 50.985 386.407 51.715C386.699 52.445 387.21 52.81 387.94 52.81C388.718 52.81 389.424 52.2017 390.057 50.985C390.738 49.7197 391.079 47.992 391.079 45.802V39.013H390.568C387.55 39.013 386.042 41.2273 386.042 45.656V46.824Z" fill="black" />
                    <path d="M257.111 13.244C258.23 14.558 260.079 15.215 262.659 15.215C265.238 15.215 267.136 14.5823 268.353 13.317C269.569 12.0517 270.178 10.3727 270.178 8.27999C270.178 6.13866 269.545 4.50833 268.28 3.38899C267.014 2.22099 265.165 1.63699 262.732 1.63699C260.298 1.63699 258.473 2.26966 257.257 3.53499C256.089 4.80033 255.505 6.40632 255.505 8.35299C255.505 10.2997 256.04 11.93 257.111 13.244Z" fill="#4630CC" />
                    <path d="M275.47 13.244C276.589 14.558 278.438 15.215 281.018 15.215C283.597 15.215 285.495 14.5823 286.712 13.317C287.928 12.0517 288.537 10.3727 288.537 8.27999C288.537 6.13866 287.904 4.50833 286.639 3.38899C285.373 2.22099 283.524 1.63699 281.091 1.63699C278.657 1.63699 276.832 2.26966 275.616 3.53499C274.448 4.80033 273.864 6.40632 273.864 8.35299C273.864 10.2997 274.399 11.93 275.47 13.244Z" fill="#D5E521" />
                </svg>
            </a>
            <?php wp_nav_menu(array("menu" => "calgariivka")); ?>
        </header>
        <hr>
        <div id="container">
            <main id="content" role="main">
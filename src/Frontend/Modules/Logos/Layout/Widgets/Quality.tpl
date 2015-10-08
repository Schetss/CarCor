{*
    variables that are available:
    - {$widgetLogosQualities}:
*}

{option:widgetLogosQualities}
    <section id="Quality" class="mod">
        <div class="inner">
            <div class="bd content">
                <ul>
                    {iteration:widgetLogosQualities}
                        <li>
                            <img alt="test" src="{$SITE_URL}/src/Frontend/{$widgetLogosQualities.logo}" />
                        </li>
                    {/iteration:widgetLogosQualities}
                </ul>
            </div>
        </div>
    </section>
{/option:widgetLogosQualities}

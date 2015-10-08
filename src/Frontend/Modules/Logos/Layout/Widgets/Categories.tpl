{*
    variables that are available:
    - {$widgetLogosCategories}:
*}

{option:widgetLogosCategories}
    <section id="LogosCategoriesWidget" class="mod">
        <div class="inner">
            <header class="hd">
                <h3>{$lblCategories|ucfirst}</h3>
            </header>
            <div class="bd content">
                <ul>
                    {iteration:widgetLogosCategories}
                        <li>
                            <img alt="test" src="{$SITE_URL}/src/Frontend/{$widgetLogosCategories.logo}" />

                           <!--  <a href="{$widgetLogosCategories.url}">
                                {$widgetLogosCategories.label}&nbsp;({$widgetLogosCategories.total})
                            </a> -->
                        </li>
                    {/iteration:widgetLogosCategories}
                </ul>
            </div>
        </div>
    </section>
{/option:widgetLogosCategories}

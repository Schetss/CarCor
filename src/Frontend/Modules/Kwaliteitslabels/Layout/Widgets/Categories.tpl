{*
    variables that are available:
    - {$widgetKwaliteitslabelsCategories}:
*}

{option:widgetKwaliteitslabelsCategories}
    <section id="KwaliteitslabelsCategoriesWidget" class="mod">
        <div class="inner">
            <header class="hd">
                <h3>{$lblCategories|ucfirst}</h3>
            </header>
            <div class="bd content">
                <ul>
                    {iteration:widgetKwaliteitslabelsCategories}

                        <li>
                            <img alt="label" src="{$SITE_URL}/src/Frontend/Files/Kwaliteitslabels/logo/100x100/{$widgetKwaliteitslabelsCategories.logo}" />

                            {$widgetKwaliteitslabelsCategories.name}
                            $widgetKwaliteitslabelsCategories.description}
                           <img alt="label" src="{$SITE_URL}/src/Frontend/Files/Kwaliteitslabels/achtergrondafbeelding/400x300/{$widgetKwaliteitslabelsCategories.image}" />
                           
                        </li>
                    {/iteration:widgetKwaliteitslabelsCategories}
                </ul>
            </div>
        </div>
    </section>
{/option:widgetKwaliteitslabelsCategories}

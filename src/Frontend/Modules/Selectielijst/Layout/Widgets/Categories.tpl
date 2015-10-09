{*
    variables that are available:
    - {$widgetSelectielijstCategories}:
*}

{option:widgetSelectielijstCategories}
    <section id="SelectielijstCategoriesWidget" class="mod">
        <div class="inner">
            <header class="hd">
                <h3>{$lblCategories|ucfirst}</h3>
            </header>
            <div class="bd content">
                <ul>
                    {iteration:widgetSelectielijstCategories}
                        <li>
                            {$widgetSelectielijstCategories.title}
                            {$widgetSelectielijstCategories.description}
                            <!-- <a href="{$widgetSelectielijstCategories.url}">
                                {$widgetSelectielijstCategories.label}&nbsp;({$widgetSelectielijstCategories.total})
                            </a> -->
                        </li>
                    {/iteration:widgetSelectielijstCategories}
                </ul>
            </div>
        </div>
    </section>
{/option:widgetSelectielijstCategories}

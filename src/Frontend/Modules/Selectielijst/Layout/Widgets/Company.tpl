{*
    variables that are available:
    - {$widgetSelectielijstCompany}:
*}

{option:widgetSelectielijstCompany}
    <section id="SelectielijstCategoriesWidget" class="mod">
        <div class="inner">
            <header class="hd">
                <h3>{$lblCategories|ucfirst}</h3>
            </header>
            <div class="bd content">
                <ul>
                    {iteration:widgetSelectielijstCompany}
                        <li>
                            {$widgetSelectielijstCompany.title}
                            {$widgetSelectielijstCompany.description}
                            <!-- <a href="{$widgetSelectielijstCompany.url}">
                                {$widgetSelectielijstCompany.label}&nbsp;({$widgetSelectielijstCompany.total})
                            </a> -->
                        </li>
                    {/iteration:widgetSelectielijstCompany}
                </ul>
            </div>
        </div>
    </section>
{/option:widgetSelectielijstCompany}

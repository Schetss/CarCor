{*
    variables that are available:
    - {$widgetOnsTeamCategories}:
*}

{option:widgetOnsTeamCategories}
    <section id="OnsTeamCategoriesWidget" class="mod">
        <div class="inner">
            <div class="bd content">
                <ul>
                    {iteration:widgetOnsTeamCategories}
                        <li>
                            <img alt="teamlid" src="{$SITE_URL}/src/Frontend/Files/OnsTeam/afbeelding/400x300/{$widgetOnsTeamCategories.name}.jpg" /></p>
                            <p>{$widgetOnsTeamCategories.name}</p>
                            <p>{$widgetOnsTeamCategories.function}</p>
                            <p>{$widgetOnsTeamCategories.description}</p>
                            <!-- &nbsp;({$widgetOnsTeamCategories.total}) -->
                        </li>
                    {/iteration:widgetOnsTeamCategories}
                </ul>
            </div>
        </div>
    </section>
{/option:widgetOnsTeamCategories}






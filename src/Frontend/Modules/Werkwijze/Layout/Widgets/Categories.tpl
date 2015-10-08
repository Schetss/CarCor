{*
    variables that are available:
    - {$widgetWerkwijzeCategories}:
*}

{option:widgetWerkwijzeCategories}
    <section id="WerkwijzeCategoriesWidget" class="mod">
        <div class="inner">
            <header class="hd">
                <h3>{$lblCategories|ucfirst}</h3>
            </header>
            <div class="bd content">
                <ul>
                    {iteration:widgetWerkwijzeCategories}
                        <li>
                           
                                {$widgetWerkwijzeCategories.title}
                                 {$widgetWerkwijzeCategories.description}
                                <img alt="{$widgetWerkwijzeCategories.title}" src="{$SITE_URL}/src/Frontend/Files/Werkwijze/afbeelding/400x300/{$widgetWerkwijzeCategories.image}" />
                                
                            
                        </li>
                    {/iteration:widgetWerkwijzeCategories}
                </ul>
            </div>
        </div>
    </section>
{/option:widgetWerkwijzeCategories}

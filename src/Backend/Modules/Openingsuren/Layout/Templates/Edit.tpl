{include:{$BACKEND_CORE_PATH}/Layout/Templates/Head.tpl}
{include:{$BACKEND_CORE_PATH}/Layout/Templates/StructureStartModule.tpl}

<div class="pageTitle">
    <h2>{$lblOpeningsuren|ucfirst}: {$lblEdit}</h2>
</div>

{form:edit}
    <label for="naam">{$lblNaam|ucfirst}</label>
    {$txtNaam} {$txtNaamError}

    <div id="pageUrl">
        <div class="oneLiner">
            {option:detailURL}<p><span><a href="{$detailURL}/{$item.url}">{$detailURL}/<span id="generatedUrl">{$item.url}</span></a></span></p>{/option:detailURL}
            {option:!detailURL}<p class="infoMessage">{$errNoModuleLinked}</p>{/option:!detailURL}
        </div>
    </div>


    <div class="tabs">
        <ul>
            <li><a href="#tabContent">{$lblContent|ucfirst}</a></li>
            <li><a href="#tabSEO">{$lblSEO|ucfirst}</a></li>
        </ul>

        <div id="tabContent">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td id="leftColumn">

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="maandagvoormiddagOpen">{$lblMaandagvoormiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtMaandagvoormiddagOpen} {$txtMaandagvoormiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="maandagvoormiddagSluit">{$lblMaandagvoormiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtMaandagvoormiddagSluit} {$txtMaandagvoormiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="maandagnamiddagOpen">{$lblMaandagnamiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtMaandagnamiddagOpen} {$txtMaandagnamiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="maandagnamiddagSluit">{$lblMaandagnamiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtMaandagnamiddagSluit} {$txtMaandagnamiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="dinsdagvoormiddagOpen">{$lblDinsdagvoormiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtDinsdagvoormiddagOpen} {$txtDinsdagvoormiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="dinsdagvoormiddagSluit">{$lblDinsdagvoormiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtDinsdagvoormiddagSluit} {$txtDinsdagvoormiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="dinsdagnamiddagOpen">{$lblDinsdagnamiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtDinsdagnamiddagOpen} {$txtDinsdagnamiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="dinsdagnamiddagSluit">{$lblDinsdagnamiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtDinsdagnamiddagSluit} {$txtDinsdagnamiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="woensdagvoormiddagOpen">{$lblWoensdagvoormiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtWoensdagvoormiddagOpen} {$txtWoensdagvoormiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="woensdagvoormiddagSluit">{$lblWoensdagvoormiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtWoensdagvoormiddagSluit} {$txtWoensdagvoormiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="woensdagnamiddagOpen">{$lblWoensdagnamiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtWoensdagnamiddagOpen} {$txtWoensdagnamiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="woensdagnamiddagSluit">{$lblWoensdagnamiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtWoensdagnamiddagSluit} {$txtWoensdagnamiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="donderdagvoormiddagOpen">{$lblDonderdagvoormiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtDonderdagvoormiddagOpen} {$txtDonderdagvoormiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="donderdagvoormiddagSluit">{$lblDonderdagvoormiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtDonderdagvoormiddagSluit} {$txtDonderdagvoormiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="donderdagnamiddagOpen">{$lblDonderdagnamiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtDonderdagnamiddagOpen} {$txtDonderdagnamiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="donderdagnamiddagSluit">{$lblDonderdagnamiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtDonderdagnamiddagSluit} {$txtDonderdagnamiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="vrijdagvoormiddagOpen">{$lblVrijdagvoormiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtVrijdagvoormiddagOpen} {$txtVrijdagvoormiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="vrijdagvoormiddagSluit">{$lblVrijdagvoormiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtVrijdagvoormiddagSluit} {$txtVrijdagvoormiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="vrijdagnamiddagOpen">{$lblVrijdagnamiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtVrijdagnamiddagOpen} {$txtVrijdagnamiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="vrijdagnamiddagSluit">{$lblVrijdagnamiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtVrijdagnamiddagSluit} {$txtVrijdagnamiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="zaterdagvoormiddagOpen">{$lblZaterdagvoormiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtZaterdagvoormiddagOpen} {$txtZaterdagvoormiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="zaterdagvoormiddagSluit">{$lblZaterdagvoormiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtZaterdagvoormiddagSluit} {$txtZaterdagvoormiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="zaterdagnamiddagOpen">{$lblZaterdagnamiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtZaterdagnamiddagOpen} {$txtZaterdagnamiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="zaterdagnamiddagSluit">{$lblZaterdagnamiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtZaterdagnamiddagSluit} {$txtZaterdagnamiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="zondagvoormiddagOpen">{$lblZondagvoormiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtZondagvoormiddagOpen} {$txtZondagvoormiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="zondagvoormiddagSluit">{$lblZondagvoormiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtZondagvoormiddagSluit} {$txtZondagvoormiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="zondagnamiddagOpen">{$lblZondagnamiddagOpen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtZondagnamiddagOpen} {$txtZondagnamiddagOpenError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="zondagnamiddagSluit">{$lblZondagnamiddagSluit|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtZondagnamiddagSluit} {$txtZondagnamiddagSluitError}
                            </div>
                        </div>

                        <div class="box">
                            <div class="heading">
                                <h3>
                                    <label for="sluitingsdagen">{$lblSluitingsdagen|ucfirst}</label>
                                </h3>
                            </div>
                            <div class="options">
                                {$txtSluitingsdagen} {$txtSluitingsdagenError}
                            </div>
                        </div>


                    </td>

                    <td id="sidebar">

                            <div class="box">
                                <div class="heading">
                                    <h3>
                                        {$lblWijZijnOpVakantie|ucfirst}
                                    </h3>
                                </div>
                                <div class="options">
                                    {$chkWijZijnOpVakantie} <label for="wijZijnOpVakantie">{$lblWijZijnOpVakantie|ucfirst} </label> {$chkWijZijnOpVakantieError}
                                </div>
                            </div>

                            <div class="box">
                                <div class="heading">
                                    <h3>
                                        {$lblMaandagOpen|ucfirst}
                                    </h3>
                                </div>
                                <div class="options">
                                    {$chkMaandagOpen} <label for="maandagOpen">{$lblMaandagOpen|ucfirst} </label> {$chkMaandagOpenError}
                                </div>
                            </div>

                            <div class="box">
                                <div class="heading">
                                    <h3>
                                        {$lblDinsdagOpen|ucfirst}
                                    </h3>
                                </div>
                                <div class="options">
                                    {$chkDinsdagOpen} <label for="dinsdagOpen">{$lblDinsdagOpen|ucfirst} </label> {$chkDinsdagOpenError}
                                </div>
                            </div>

                            <div class="box">
                                <div class="heading">
                                    <h3>
                                        {$lblWoensdagOpen|ucfirst}
                                    </h3>
                                </div>
                                <div class="options">
                                    {$chkWoensdagOpen} <label for="woensdagOpen">{$lblWoensdagOpen|ucfirst} </label> {$chkWoensdagOpenError}
                                </div>
                            </div>

                            <div class="box">
                                <div class="heading">
                                    <h3>
                                        {$lblVrijdagOpen|ucfirst}
                                    </h3>
                                </div>
                                <div class="options">
                                    {$chkVrijdagOpen} <label for="vrijdagOpen">{$lblVrijdagOpen|ucfirst} </label> {$chkVrijdagOpenError}
                                </div>
                            </div>

                            <div class="box">
                                <div class="heading">
                                    <h3>
                                        {$lblZondagOpen|ucfirst}
                                    </h3>
                                </div>
                                <div class="options">
                                    {$chkZondagOpen} <label for="zondagOpen">{$lblZondagOpen|ucfirst} </label> {$chkZondagOpenError}
                                </div>
                            </div>

                            <div class="box">
                                <div class="heading">
                                    <h3>
                                        {$lblZaterdagOpen|ucfirst}
                                    </h3>
                                </div>
                                <div class="options">
                                    {$chkZaterdagOpen} <label for="zaterdagOpen">{$lblZaterdagOpen|ucfirst} </label> {$chkZaterdagOpenError}
                                </div>
                            </div>

                            <div class="box">
                                <div class="heading">
                                    <h3>
                                        {$lblDonderdagOpen|ucfirst}
                                    </h3>
                                </div>
                                <div class="options">
                                    {$chkDonderdagOpen} <label for="donderdagOpen">{$lblDonderdagOpen|ucfirst} </label> {$chkDonderdagOpenError}
                                </div>
                            </div>

                            <div class="box">
                                <div class="heading">
                                    <h3>
                                        <label for="categoryId">{$lblCategory|ucfirst}</label>
                                    </h3>
                                </div>
                                <div class="options">
                                    {$ddmCategoryId} {$ddmCategoryIdError}
                                </div>
                            </div>


                    </td>
                </tr>
            </table>
        </div>

        <div id="tabSEO">
            {include:{$BACKEND_CORE_PATH}/Layout/Templates/Seo.tpl}
        </div>

    </div>

    <div class="fullwidthOptions">
        <a href="{$var|geturl:'delete'}&amp;id={$item.id}" data-message-id="confirmDelete" class="askConfirmation button linkButton icon iconDelete">
            <span>{$lblDelete|ucfirst}</span>
        </a>
        <div class="buttonHolderRight">
            <input id="addButton" class="inputButton button mainButton" type="submit" name="add" value="{$lblSave|ucfirst}" />
        </div>
    </div>

    <div id="confirmDelete" title="{$lblDelete|ucfirst}?" style="display: none;">
        <p>
            {$msgConfirmDelete|sprintf:{$item.title}}
        </p>
    </div>
{/form:edit}

{include:{$BACKEND_CORE_PATH}/Layout/Templates/StructureEndModule.tpl}
{include:{$BACKEND_CORE_PATH}/Layout/Templates/Footer.tpl}

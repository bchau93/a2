<link href="./assets/css/homepage.css" rel="stylesheet" type="text/css">
<div class="row">
    <div class="span4">   
        <div class="text">
            <b>{what}</b>
        </div>
    </div>
</div>
<div class="row">
    <div class="span4">
        <div class="text">
            <table>
                <tr>
                    <td width="30%">
                        <form id="pForm" method="post" enctype="multipart/form-data">
                            <select id="team" name="team">
                              {TeamList}
                                    <option value="{teamCode}">vs &nbsp;&nbsp;{id}</option>
                              {/TeamList}
                            </select>
                    <td>
                    <td rowspan="2">
                        <div class="text" id="result" text-align="left">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input id="predict" type="button" value="Predict" onclick="makeAjaxCall()"/>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>


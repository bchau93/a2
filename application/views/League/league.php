<div class="row"> 
    <div class="text">
        <button><a href="/League/layout/leagueConf">Conference</a></button>
        <button><a href="/League/layout/leagueDiv">Division</a></button>
        <button><a href="League">League</a></button>
        <br/>
        Sort By:
        <br/>
        <button><a href="/League/city">City</a></button>
        <button><a href="/League/team">Team</a></button>
        <button><a href="/League/stand">Standing (Net Points)</a></button>
        <br/>
        <h2>NFL Teams - 2015 Regular Season</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>LOGO:</th>
                    <th>TEAM NAME</th>
                    <th>CITY:</th>
                    <th>WINS:</th>
                    <th>LOSSES:</th>
                    <th>TIES:</th>
                    <th>PF:</th>
                    <th>PA:</th>
                    <th>NET POINTS:</th>
                    <th>HOME WINS:</th>
                    <th>ROAD WINS:</th>
                    <th>DIVISION WINS:</th>
                    <th>CONF:</th>
                    <th>NON-CONF:</th>
                    <th>STREAK:</th>
                    <th>LAST 5:</th>                    
                </tr>
            </thead>
            <tbody>
                {AllTeams}
                <tr>
                    <td><img class="logo" src="/assets/images/teamLogos/{logo}"/></td>
                    <td>{id}</td>
                    <td>{city}</td>
                    <td>{win}</td>
                    <td>{loss}</td>
                    <td>{ties}</td>
                    <td>{pf}</td>
                    <td>{pa}</td>
                    <td>{netpts}</td>
                    <td>{homew}</td>
                    <td>{roadw}</td>
                    <td>{divw}</td>
                    <td>{confscore}</td>
                    <td>{nonconfscore}</td>
                    <td>{streak}</td>
                    <td>{last5}</td>
                </tr>
                {/AllTeams}
            </tbody>
        </table>
    </div>
</div>


<div class="row"> 
    <div class="text">
        <button><a href="/League/layout/leagueConf">Conference</a></button>
        <button><a href="/League/layout/leagueDiv">Division</a></button>
        <button><a href="/League/layout/league">League</a></button>
        <br/>
        Sort By:
        <br/>
        <button><a href="">City</a></button>
        <button><a href="">Team</a></button>
        <button><a href="">Standing (Net Points)</a></button>
        <br/>
        <h2>NFL Teams - American Football Conference</h2>
        <table class="table table-bordered tb">
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
                {AFC}
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
                {/AFC}
            </tbody>
        </table>
        
        <h2>NFL Teams - National Football Conference</h2>
        <table class="table table-bordered tb">
            <thead>
                <tr>
                    <th>Logo:</th>
                    <th>TEAM NAME</th>
                    <th>CITY:</th>
                    <th>DIVISION:</th>
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
                {NFC}
                <tr>
                    <td><img class="logo" src="/assets/images/teamLogos/{logo}"/></td>
                    <td>{id}</td>
                    <td>{city}</td>
                    <td>{division}</td>
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
                {/NFC}
            </tbody>
        </table>
    </div>  
</div>


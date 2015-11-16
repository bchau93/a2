<div class="row">
    <div class="text">
        <h2>The Bengals Players</h2>
        <br/>
        <table cols="3">
            {players}    
            <a href="/Roster/playerDetails/{id}">
                    <img src="/assets/images/players/{playerPhoto}" class="playerPhotoGallery">
                </a>            
            {/players}
        </table>
    </div>
    <div class="pagination-centered">
        {pagination}
    </div>
    
</div>
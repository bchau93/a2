<div class="row">
    <div class="text">
        <div id="toggles">
            <div id="orderToggles">
                <label>
                    <input type="radio" 
                           name="order" 
                           value="playerLastName" 
                           onchange="toggle(this)" {nameDefault}>
                        Name
                    </input>
                </label>
                <label>
                    <input type="radio" 
                           name="order" 
                           value="playerPosition" 
                           onchange="toggle(this)" {posDefault}>
                        Position
                    </input>
                </label>
                <label>
                    <input type="radio" 
                           name="order" 
                           value="playerNumber" 
                           onchange="toggle(this)" {numDefault}>
                        Jersey #
                    </input>
                </label>
            </div>

            <div id="layoutToggles">
                <label>
                    <input type="radio" 
                           name="layout" 
                           value="table" 
                           onchange="toggle(this)" {tabDefault}>
                        Table
                    </input>
                </label>
                <label>
                    <input type="radio" 
                           name="layout" 
                           value="gallery" 
                           onchange="toggle(this)" {galDefault}>    
                        Gallery
                    </input>
                </label>
            </div>

            <div id="editToggle">
                <label>
                    <input type="checkbox" 
                           name="edit" 
                           value="edit" 
                           onchange="toggleEdit(this)" {editDefault}>
                        Edit Players
                    </input>
                </label>
            </div>
        </div>

        <h2>The Bengals Players</h2>
        <br/>
        <table cols="3">
            {players}    
            <a href="/playerDetails/{id}" title="{playerFirstName} {playerLastName} - {playerNumber}">
                <img src="/assets/images/players/{playerPhoto}"  width="200px" height="150px"/>  
            </a> 
            {/players}
        </table>
    </div>
    
    <div class="pagination-centered">
        {pagination}
    </div>
</div>
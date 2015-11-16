<div id="toggles">
            <div id="orderToggles">
                <label>
                    <input type="radio" name="order" value="playerLastName" onchange="toggle(this)" {nameDefault}>Name</input>
                </label>
                <label>
                    <input type="radio" name="order" value="playerPosition" onchange="toggle(this)" {posDefault}>Position</input>
                </label>
                <label>
                    <input type="radio" name="order" value="playerNumber" onchange="toggle(this)" {numDefault}>Jersey #</input>
                </label>
            </div>

            <div id="layoutToggles">
                <label>
                    <input type="radio" name="layout" value="table" onchange="toggle(this)" {tabDefault}>Table</input>
                </label>
                <label>
                    <input type="radio" name="layout" value="gallery" onchange="toggle(this)" {galDefault}>Gallery</input>
                </label>
            </div>
    
            <div id="editToggle">
                <label>
                    <input type="checkbox" name="edit" value="edit" onchange="toggleEdit(this)" {editDefault}>Edit Players</input>
                </label>
            </div>
        </div
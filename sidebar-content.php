<div id="sidebar">
        <div class="nav" id="sidebar-nav">
            <label class="non-desktop hamburger-menu" id="sidebar-open-hamburger">
                <input type="checkbox" id="toggle-closed">
            </label>
            <a href = "profile.php" > profile</a>
            <a>settings</a>
            <?php
                if( $_SESSION['onlineUsers']){
                 
                  
                  echo  '<button class = "logoutbutton" onClick="handlelogout()"> Logout </button>';
                }
                ?>
        </div>
        <div id="sidebar-info">
            <div id="assignment info">
                <h2>Deadlines</h2>
                <!-- <div class="info-block">Test</div> -->
                <?php
                    if ($numDeadlines > 0) {
                        while ($deadline = mysqli_fetch_assoc($deadlines)) {
                            echo '<div class="info-block">' . $deadline["deadline_name"] . ' : ' . $deadline['due_date'] . '<button class="del-button" id="' . $deadline["id"] . '"onclick="handleDeadlineDelete(event)">✖</button></div>';
                        }
                    }
                ?>
            </div>
            <div id="note info">
                <h2>Recent Notes</h2>
                <!-- <div class="info-block">Test</div> -->
                <?php
                    if ($numNotes > 0) {
                        while ($note = mysqli_fetch_assoc($notes)) {
                            echo '<div class="info-block">' . $note["title"] . '<button class="del-button" id="' . $note["id"] . '" onclick="handleNoteDelete(event)">✖</button></div>';
                        }
                    }
                ?>
            </div >
            <h2> Flashcards Information</h2>
            <div class = "info-block" id = "result"> </div>
            <div class = "info-block" id = "flashcardnum"> </div>
        </div>
    </div>
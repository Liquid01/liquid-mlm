<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walnut Healthcare - My Downlines</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            padding: 20px;
        }

        .container-fluid {
            max-width: 1200px;
            margin: auto;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }

        h2 {
            color: #28a745; /* Walnut Healthcare green */
            margin-bottom: 30px;
            font-weight: 600;
            text-align: center;
        }

        /*----------------genealogy-scroll----------*/
        .genealogy-scroll::-webkit-scrollbar {
            width: 5px;
            height: 8px;
        }
        .genealogy-scroll::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #e4e4e4;
        }
        .genealogy-scroll::-webkit-scrollbar-thumb {
            background: #212121;
            border-radius: 10px;
            transition: 0.5s;
        }
        .genealogy-scroll::-webkit-scrollbar-thumb:hover {
            background: #d5b14c;
            transition: 0.5s;
        }

        /*----------------genealogy-tree----------*/
        .genealogy-body{
            white-space: nowrap;
            overflow-y: hidden;
            padding: 50px;
            min-height: 500px;
            padding-top: 10px;
            text-align: center;
        }
        .genealogy-tree{
            display: inline-block;
        }
        .genealogy-tree ul {
            padding-top: 20px;
            position: relative;
            padding-left: 0px;
            display: flex;
            justify-content: center;
        }
        .genealogy-tree li {
            float: left; text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
        }
        .genealogy-tree li::before, .genealogy-tree li::after{
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 2px solid #ccc;
            width: 50%;
            height: 18px;
        }
        .genealogy-tree li::after{
            right: auto; left: 50%;
            border-left: 2px solid #ccc;
        }
        .genealogy-tree li:only-child::after, .genealogy-tree li:only-child::before {
            display: none;
        }
        .genealogy-tree li:only-child{
            padding-top: 0;
        }
        .genealogy-tree li:first-child::before, .genealogy-tree li:last-child::after{
            border: 0 none;
        }
        .genealogy-tree li:last-child::before{
            border-right: 2px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }
        .genealogy-tree li:first-child::after{
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }
        .genealogy-tree ul ul::before{
            content: '';
            position: absolute; top: 0; left: 50%;
            border-left: 2px solid #ccc;
            width: 0; height: 20px;
        }
        .genealogy-tree li a{
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma;
            font-size: 11px;
            display: inline-block;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }

        .genealogy-tree li a:hover,
        .genealogy-tree li a:hover+ul li a {
            background: #c8e4f8;
            color: #000;
        }

        .genealogy-tree li a:hover+ul li::after,
        .genealogy-tree li a:hover+ul li::before,
        .genealogy-tree li a:hover+ul::before,
        .genealogy-tree li a:hover+ul ul::before{
            border-color: #fbba00;
        }

        /*--------------memeber-card-design----------*/
        .member-view-box{
            padding-bottom: 10px;
            text-align: center;
            border-radius: 4px;
            position: relative;
            border: 1px;
            border-color: #e4e4e4;
            border-style: solid;
            background-color: #fff; /* Ensure white background */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Add shadow for better look */
        }
        .member-image{
            padding:10px;
            width: 120px;
            position: relative;
            margin: 0 auto; /* Center image */
        }
        .member-image img{
            width: 100px;
            height: 100px;
            border-radius: 50%; /* Make it round */
            object-fit: cover;
            background-color :#fff;
            z-index: 1;
            border: 3px solid #28a745; /* Green border for profile pic */
        }
        .member-header {
            padding: 5px 0;
            text-align: center;
            background: #28a745; /* Walnut Healthcare green */
            color: #fff;
            font-size: 14px;
            border-radius: 4px 4px 0 0;
        }
        .member-footer {
            text-align: center;
            padding: 5px 0;
        }
        .member-footer div.name {
            color: #000;
            font-size: 14px;
            margin-bottom: 5px;
            font-weight: 600;
        }
        .member-footer div.downline {
            color: #6c757d; /* Grey for info */
            font-size: 12px;
            font-weight: normal;
            margin-bottom: 5px;
        }

        /* Loading indicator */
        .loading-indicator {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
            color: #6c757d;
        }

        /* Message box for alerts */
        .message-box {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 8px;
            padding: 15px 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .message-box.show {
            display: block;
            opacity: 1;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <h2>My Downline Tree</h2>
    <div class="body genealogy-body genealogy-scroll">
        <div id="downlineTree" class="genealogy-tree">
            <!-- Tree will be rendered here by JavaScript -->
        </div>
    </div>
    <div id="loadingIndicator" class="loading-indicator" style="display: none;">Loading downlines...</div>
</div>

<div id="messageBox" class="message-box"></div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        // Function to display a custom message box
        function showMessageBox(message, type = 'info') {
            const messageBox = $('#messageBox');
            messageBox.removeClass().addClass('message-box show');
            if (type === 'error') {
                messageBox.addClass('bg-danger text-white border-danger');
            } else if (type === 'success') {
                messageBox.addClass('bg-success text-white border-success');
            } else {
                messageBox.addClass('bg-info text-white border-info');
            }
            messageBox.text(message);
            setTimeout(() => {
                messageBox.removeClass('show');
            }, 3000); // Hide after 3 seconds
        }

        // --- Dummy Data Generation (Simulates API Response) ---
        const memberDataStore = {}; // Stores all generated dummy data

        function generateDummyData(id, depth) {
            if (memberDataStore[id]) {
                return memberDataStore[id]; // Return cached data if exists
            }

            const names = ["Aisha", "Chidi", "Fatima", "Gbenga", "Ngozi", "Obi", "Tunde", "Zainab", "Kunle", "Blessing", "Emeka", "Amara"];
            const profilePics = [
                "https://placehold.co/100x100/28a745/ffffff?text=P1",
                "https://placehold.co/100x100/007bff/ffffff?text=P2",
                "https://placehold.co/100x100/ffc107/333333?text=P3",
                "https://placehold.co/100x100/6c757d/ffffff?text=P4",
                "https://placehold.co/100x100/17a2b8/ffffff?text=P5",
                "https://placehold.co/100x100/dc3545/ffffff?text=P6"
            ];

            const member = {
                id: id,
                name: names[Math.floor(Math.random() * names.length)],
                profilePic: profilePics[Math.floor(Math.random() * profilePics.length)],
                downlineCount: Math.floor(Math.random() * 10) + 1, // Dummy downline count
                totalTeam: Math.floor(Math.random() * 50) + 10, // Dummy total team count
                children: []
            };

            if (depth < 3) { // Limit depth for dummy data to prevent infinite recursion
                // Ensure a binary tree structure: 0, 1, or 2 children
                const numChildren = Math.floor(Math.random() * 3); // Generates 0, 1, or 2

                // To ensure a consistent "left" and "right" child for visual representation
                const childPositions = ['L', 'R'];
                // Shuffle positions if only one child to make it appear on either side randomly
                if (numChildren === 1) {
                    childPositions.sort(() => Math.random() - 0.5);
                }

                for (let i = 0; i < numChildren; i++) {
                    const childId = `${id}_${childPositions[i]}`; // Assign 'L' or 'R'
                    member.children.push({
                        id: childId,
                        name: names[Math.floor(Math.random() * names.length)],
                        profilePic: profilePics[Math.floor(Math.random() * profilePics.length)],
                        downlineCount: 0, // Will be updated when fetched
                        totalTeam: 0, // Will be updated when fetched
                        children: [] // Children are initially empty, loaded on click
                    });
                }
            }
            memberDataStore[id] = member; // Cache the generated data
            return member;
        }

        // --- AJAX Request Simulation ---
        async function fetchDownlines(memberId, depth = 0) {
            $('#loadingIndicator').show();
            return new Promise(resolve => {
                setTimeout(() => { // Simulate network delay
                    const data = generateDummyData(memberId, depth);
                    $('#loadingIndicator').hide();
                    resolve(data);
                }, 500);
            });
        }

        // --- Tree Rendering Function ---
        function renderNode(memberData, parentUl) {
            const li = $(`<li>
                    <a href="javascript:void(0);" data-member-id="${memberData.id}" data-member-name="${memberData.name}" data-loaded="false">
                        <div class="member-view-box">
                            <div class="member-header">
                                <span>Member</span>
                            </div>
                            <div class="member-image">
                                <img src="${memberData.profilePic}" alt="${memberData.name}'s Profile">
                            </div>
                            <div class="member-footer">
                                <div class="name"><span>${memberData.name}</span></div>
                                <div class="downline"><span>Direct: ${memberData.downlineCount} | Team: ${memberData.totalTeam}</span></div>
                            </div>
                        </div>
                    </a>
                </li>`);

            const childrenUl = $('<ul></ul>'); // This UL will hold the children, initially hidden
            li.append(childrenUl);
            parentUl.append(li);

            // Event Listener for Node Expansion
            li.find('a').on('click', async function(e) {
                e.stopPropagation(); // Prevent click from bubbling up to parent li

                const clickedLink = $(this);
                const memberId = clickedLink.data('member-id');
                const memberName = clickedLink.data('member-name');
                let isLoaded = clickedLink.data('loaded');
                const currentChildrenUl = clickedLink.next('ul'); // Get the UL directly after the clicked A

                // Toggle active class for visual feedback
                $('.genealogy-tree li a').removeClass('active-node'); // Remove from all
                clickedLink.addClass('active-node'); // Add to clicked

                if (currentChildrenUl.is(":visible")) {
                    // If already expanded, collapse it
                    currentChildrenUl.hide('fast').removeClass('active');
                    clickedLink.data('loaded', false); // Mark as not loaded for re-fetch on next click
                    showMessageBox(`Collapsed downlines for ${memberName}.`, 'info');
                    return;
                }

                if (isLoaded === false) { // Only fetch if not already loaded
                    try {
                        showMessageBox(`Fetching downlines for ${memberName}...`, 'info');
                        const downlineData = await fetchDownlines(memberId, clickedLink.parents('ul').length + 1); // Pass current depth

                        currentChildrenUl.empty(); // Clear existing children before re-rendering

                        if (downlineData.children && downlineData.children.length > 0) {
                            downlineData.children.forEach(child => {
                                renderNode(child, currentChildrenUl);
                            });
                            clickedLink.data('loaded', true); // Mark as loaded
                            currentChildrenUl.show('fast').addClass('active');
                            showMessageBox(`Successfully loaded ${downlineData.children.length} downlines for ${memberName}.`, 'success');
                        } else {
                            showMessageBox(`No direct downlines found for ${memberName}.`, 'info');
                            clickedLink.data('loaded', true); // Still mark as loaded to avoid re-fetching
                            currentChildrenUl.hide('fast').removeClass('active'); // Ensure it's collapsed if no children
                        }
                    } catch (error) {
                        console.error("Error fetching downlines:", error);
                        showMessageBox(`Failed to load downlines for ${memberName}. Please try again.`, 'error');
                    }
                } else {
                    // If already loaded and not expanded, just expand
                    currentChildrenUl.show('fast').addClass('active');
                    showMessageBox(`Expanded downlines for ${memberName}.`, 'info');
                }
            });
        }

        // --- Initial Load for the Root User ---
        async function loadRootUser() {
            const rootUserId = "user_1"; // This would be the logged-in user's ID
            const rootUserName = "You (Current Member)"; // Display name for the root user

            try {
                showMessageBox(`Loading your downline tree...`, 'info');
                const rootUserData = await fetchDownlines(rootUserId, 0); // Fetch root user's data
                rootUserData.name = rootUserName; // Override dummy name for root
                rootUserData.profilePic = "https://placehold.co/100x100/28a745/ffffff?text=YOU"; // Special pic for root
                rootUserData.downlineCount = rootUserData.children.length; // Set initial downline count for root

                const treeContainer = $('#downlineTree');
                treeContainer.empty(); // Clear any previous content

                const rootUl = $('<ul></ul>');
                treeContainer.append(rootUl);

                // Render the root node
                const rootLi = $(`<li>
                        <a href="javascript:void(0);" data-member-id="${rootUserData.id}" data-member-name="${rootUserData.name}" data-loaded="true">
                            <div class="member-view-box">
                                <div class="member-header">
                                    <span>You</span>
                                </div>
                                <div class="member-image">
                                    <img src="${rootUserData.profilePic}" alt="${rootUserData.name}'s Profile">
                                </div>
                                <div class="member-footer">
                                    <div class="name"><span>${rootUserData.name}</span></div>
                                    <div class="downline"><span>Direct: ${rootUserData.downlineCount} | Team: ${rootUserData.totalTeam}</span></div>
                                </div>
                            </div>
                        </a>
                    </li>`);
                const rootChildrenUl = $('<ul></ul>'); // This UL will hold the children of the root
                rootLi.append(rootChildrenUl);
                rootUl.append(rootLi);

                if (rootUserData.children && rootUserData.children.length > 0) {
                    rootUserData.children.forEach(child => {
                        renderNode(child, rootChildrenUl);
                    });
                    // Ensure root's direct children are visible initially
                    rootChildrenUl.show('fast').addClass('active');
                    showMessageBox(`Your downline tree loaded successfully. Click on any member to expand their team!`, 'success');
                } else {
                    showMessageBox(`You currently have no direct downlines. Start building your team!`, 'info');
                    rootChildrenUl.hide('fast').removeClass('active'); // Ensure it's collapsed if no children
                }

            } catch (error) {
                console.error("Error loading root user data:", error);
                showMessageBox(`Failed to load your downline tree. Please refresh the page.`, 'error');
            }
        }

        // Initial jQuery setup from CodePen, adjusted for dynamic content
        // Ensure all ULs are hidden initially, except the top-most one which will be handled by loadRootUser
        $('.genealogy-tree ul').hide(); // Hide all ULs initially

        loadRootUser(); // Initial call to load the tree
    });
</script>
</body>
</html>

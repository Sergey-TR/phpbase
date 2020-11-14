
<div style="display: flex; align-items: center; justify-content: center; 
            height: 100vh; background-color: black;">
    <div style="display: flex; align-items: center; justify-content: center; 
                flex-direction:column;">
        <img src="/img/<?= $imageId['route'] ?>" alt="">
        <div style="display: flex; align-items: center;justify-content: space-between; 
                width: 100%; margin-top: 10px;">
            <div>
                <span style="color: white; 
                font-size: 20px; font-weight: bold;">rating <?= $imageId['views'] ?></span>
            </div>
            <div>
                <a href="/" style="text-decoration: none; color: white; 
                font-size: 20px; cursor: pointer; font-weight: bold;">back</a>
            </div>
        </div>
    </div>
</div>

let player;
let cursors;

const config = {
    type: Phaser.AUTO,
    backgroundColor: "#000",

    scale: {
        mode: Phaser.Scale.RESIZE,
        width: window.innerWidth,
        height: window.innerHeight
    },

    physics: {
        default: "arcade",
        arcade: { debug: true }
    },

    scene: {
        preload: preload,
        create: create,
        update: update
    }
};

const game = new Phaser.Game(config);

// ==================== PRELOAD ====================
function preload() {
    this.load.image('tiles', 'public/assets/tiles.png'); // tileset
    this.load.tilemapTiledJSON('map', 'public/assets/map.json'); // JSON do tiled
}

// ==================== CREATE ====================
function create() {
    const map = this.make.tilemap({ key: 'map' });

    const tileset = map.addTilesetImage('tileset_name_no_tiled', 'tiles');

    const layer = map.createLayer('Ground', tileset);

    layer.setCollisionByProperty({ collides: true });

    // player
    player = this.physics.add.sprite(100, 100, null)
        .setDisplaySize(32, 32)
        .setTint(0x00ff00);

    player.setCollideWorldBounds(true);

    // colisão com mapa
    this.physics.add.collider(player, layer);

    // câmera
    this.cameras.main.startFollow(player);
    this.cameras.main.setBounds(0, 0, map.widthInPixels, map.heightInPixels);

    cursors = this.input.keyboard.createCursorKeys();
}

// ==================== UPDATE ====================
function update() {
    const speed = 200;

    player.setVelocity(0);

    if (cursors.left.isDown) player.setVelocityX(-speed);
    if (cursors.right.isDown) player.setVelocityX(speed);
    if (cursors.up.isDown) player.setVelocityY(-speed);
    if (cursors.down.isDown) player.setVelocityY(speed);

    player.body.velocity.normalize().scale(speed);
}
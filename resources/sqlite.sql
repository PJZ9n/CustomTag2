-- #! sqlite

-- #{ CustomTag2

    -- #{ playertag
        -- #{ init
CREATE TABLE IF NOT EXISTS playertag (
    player TEXT NOT NULL,
    tag INTEGER NOT NULL,
    isset INTEGER NOT NULL
);
        -- #}
    -- #}

    -- #{ shoptag
        -- #{ init
CREATE TABLE IF NOT EXISTS shoptag (
    id INTEGER PRIMARY KEY NOT NULL,
    text TEXT NOT NULL,
    price INTEGER NOT NULL
);
        -- #}
    -- #}

-- #}
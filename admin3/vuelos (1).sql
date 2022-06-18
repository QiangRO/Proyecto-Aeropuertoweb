CREATE TABLE vuelos (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  codigovuelo varchar(255) NOT NULL,
  origen varchar(255) NOT NULL,
  destino varchar(255) NOT NULL,
  fechasalida varchar(255) NOT NULL,
  fecharegreso varchar(255) NOT NULL DEFAULT '-',
  horasalida varchar(255) NOT NULL,
  horallegada varchar(255) NOT NULL,
  precio DECIMAL(9,2)
);

CREATE TABLE IF NOT EXISTS carrito_usuarios(
    id_sesion VARCHAR(255) NOT NULL,
    id_producto BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (id_producto) REFERENCES vuelos(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);
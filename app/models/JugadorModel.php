<?php
require_once('MazoModel.php');

class JugadorModel
{
    private int $cantVidas;
    private string $nombre;
    private Mazo $mazo;

    public function __construct(string $nombre, int $cantVidas)
    {
        $this->nombre = $nombre;
        $this->cantVidas = $cantVidas;
        $this->mazo = new Mazo();
    }

    public function getVidas(): int
    {
        return $this->cantVidas;
    }

    public function setVidas(int $value): void
    {
        if ($this->cantVidas >= 0) {
            $this->cantVidas -= $value;
        }
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $value): void
    {
        $this->nombre = $value;
    }

    public function getMazo(): Mazo
    {
        return $this->mazo;
    }

    public function getCartaMazoAleatoria(): Carta
    {
        return $this->mazo->getCartaAleatoria();
    }

    public function quedanVidas(): bool
    {
        return $this->cantVidas > 0;
    }

    public function __toString(): string
    {
        return "Nombre de usuario: " . $this->nombre . " Cantidad de vidas: " . $this->cantVidas . " Cantidad de cartas en el mazo: " . $this->mazo->contarCartasMazo();
    }
}

?>
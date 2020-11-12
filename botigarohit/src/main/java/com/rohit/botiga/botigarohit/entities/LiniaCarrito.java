package com.rohit.botiga.botigarohit.entities;

import javax.persistence.*;

@Entity
public class LiniaCarrito {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idListaCarrito;

    @ManyToOne(cascade = CascadeType.ALL)
    private Producte producte;

    private int quantitat;

    public LiniaCarrito(){

    }

    public int getIdListaCarrito() {
        return idListaCarrito;
    }

    public void setIdListaCarrito(int idListaCarrito) {
        this.idListaCarrito = idListaCarrito;
    }

    public Producte getProducte() {
        return producte;
    }

    public void setProducte(Producte producte) {
        this.producte = producte;
    }

    public int getQuantitat() {
        return quantitat;
    }

    public void setQuantitat(int quantitat) {
        this.quantitat = quantitat;
    }
}

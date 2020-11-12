package com.rohit.botiga.botigarohit.entities;

import javax.persistence.*;

@Entity
public class ProducteStock {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idProcteStock;
    private int quantitat;

    @OneToOne(cascade = CascadeType.ALL)
    private Producte producte;


    public ProducteStock(){

    }

    public int getIdProcteStock() {
        return idProcteStock;
    }

    public void setIdProcteStock(int idProcteStock) {
        this.idProcteStock = idProcteStock;
    }

    public int getQuantitat() {
        return quantitat;
    }

    public void setQuantitat(int quantitat) {
        this.quantitat = quantitat;
    }

    public Producte getProducte() {
        return producte;
    }

    public void setProducte(Producte producte) {
        this.producte = producte;
    }
}

package com.rohit.botiga.botigarohit.entities;

import javax.persistence.*;

@Entity
public class LiniaFactura {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idLiniaFactura;

    @ManyToOne(cascade = CascadeType.ALL)
    private Producte producte;
    private int quantitat;
    private float preuTotal;



    public LiniaFactura(){

    }

    public int getIdLiniaFactura() {
        return idLiniaFactura;
    }

    public void setIdLiniaFactura(int idLiniaFactura) {
        this.idLiniaFactura = idLiniaFactura;
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

    public float getPreuTotal() {
        return preuTotal;
    }

    public void setPreuTotal(float preuTotal) {
        this.preuTotal = preuTotal;
    }
}

package com.rohit.botiga.botigarohit.entities;

import javax.persistence.*;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;

@Entity
public class Factura {


    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idFactura;

    @OneToMany(cascade = CascadeType.ALL)
    private List<LiniaFactura> alLiniaFactura = new ArrayList<>();

    @OneToOne(cascade = CascadeType.ALL)
    private Client client;
    private LocalDateTime horaCompra;
    private float totalFactura;


    public Factura(){

    }

    public int getIdFactura() {
        return idFactura;
    }

    public void setIdFactura(int idFactura) {
        this.idFactura = idFactura;
    }

    public List<LiniaFactura> getAlLiniaFactura() {
        return alLiniaFactura;
    }

    public void setAlLiniaFactura(List<LiniaFactura> alLiniaFactura) {
        this.alLiniaFactura = alLiniaFactura;
    }

    public Client getClient() {
        return client;
    }

    public void setClient(Client client) {
        this.client = client;
    }

    public LocalDateTime getHoraCompra() {
        return horaCompra;
    }

    public void setHoraCompra(LocalDateTime horaCompra) {
        this.horaCompra = horaCompra;
    }

    public float getTotalFactura() {
        return totalFactura;
    }

    public void setTotalFactura(float totalFactura) {
        this.totalFactura = totalFactura;
    }
}

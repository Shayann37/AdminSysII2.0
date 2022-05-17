$ORIGIN l2-8.ephec-ti.be.
$TTL  604800
@       IN      SOA     ns.l2-8.ephec-ti.be. he202036.students.ephec.be. (
                        1       ; Serial
                        604800  ; Refresh
                        86400   ; Retry
                        2419200 ; Expire
                        604800 ); Negative Cache TTL
;
; NS configs
            IN      NS      ns.l2-8.ephec-ti.be.
            IN      MX  10  mail
ns          IN      A       176.96.231.174


; Web
b2b         IN      A       176.96.231.174
www         IN      A       176.96.231.174

; Mail
mail        IN      A       176.96.231.174
smtp        IN      CNAME   mail
pop	    IN	    CNAME   mail
imap	    IN      CNAME   mail

;VoIP
_sip._udp       SRV     10      100       5060        sip
_sip._tcp       SRV     10       100       5060        sip
sip             IN          A       176.96.231.174

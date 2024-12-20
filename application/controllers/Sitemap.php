<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller
{

    public function index_old()
    {
        // Fetch data from the products table
        $query = $this->db->get("products");
        $items = $query->result();

        // Generate XML
        $xml_data = $this->generate_xml_old($items);

        // Write XML to sitemap.xml file
        $file_path = FCPATH . 'sitemap.xml';
        file_put_contents($file_path, $xml_data);
        header('Content-Type: application/json');
        $res = array("res" => "success", "msg" => "Sitemap updated successfully.");
        echo json_encode($res);
    }

    private function generate_xml_old($items)
    {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

        // Add static URLs
        $static_urls = [
            [
                'loc' => base_url(),
                'lastmod' => date('c'),
                'changefreq' => 'daily',
                'priority' => '1.0'
            ],
            [
                'loc' => base_url('Home/Login'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Wishlist'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Cart'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Individual'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/ComboProduct'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Cart'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Prebooking/46/89'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Prebooking/43/73'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/BecomePartner'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/BecomeSeller'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/WorkWithUs'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Blogs'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Rewards'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Disclaimer'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/TermAndCondition'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/ShippingPolicy'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/CancellationPolicy'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/ReturnPolicy'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/RefundPolicy'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/ExchangePolicy'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/InfringementPolicy'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/PrivacyPolicy'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Feedback'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/FAQs'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/ShoppingGuid'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/CouponRedemption'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/PaymentMethod'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/ChooseYourSize'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/GiftWrapping'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Unboxing'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/RoyalCustomerBenifits'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/AboutUs'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Career'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Contactus'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Press'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/SiteMap'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/OrderTracking'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Wishlist'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/Compare'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Product/C/men'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Product/S/Topwear'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Product/CS/t-shirt'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Designers/Difference_of_Opinion/28'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('BestSeller/NA/28'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Home/RoyalBenefits'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Designers/AND/29'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('BestSeller/NA/29'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Designers/Puma/29'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ],
            [
                'loc' => base_url('Designers/Levi-s/28'),
                'lastmod' => date('c'),
                'priority' => '0.80'
            ]
        ];

        foreach ($static_urls as $static_url) {
            $url = $xml->addChild('url');
            $url->addChild('loc', htmlspecialchars($static_url['loc']));
            $url->addChild('lastmod', $static_url['lastmod']);
            $url->addChild('priority', $static_url['priority']);
        }

        // Add dynamic URLs from the database
        foreach ($items as $item) {
            $url = $xml->addChild('url');
            $url->addChild('loc', base_url('Home/ProductDetails/' . $item->id)); // Assuming each product has an 'id' field
            $url->addChild('lastmod', date('c', strtotime($item->modified_at)));
            $url->addChild('priority', '0.80'); // Set according to your needs
        }

        return $xml->asXML();
    }


    public function generate_product_sitemap()
    {
        // Fetch data from the products table
        $query = $this->db->get("products");
        $items = $query->result();
    
        // Generate XML for products
        $xml_data = $this->generate_product_xml($items);
    
        // Write XML to product_sitemap.xml file
        $file_path = FCPATH . 'product_sitemap.xml';
        file_put_contents($file_path, $xml_data);
        // header('Content-Type: application/json');
        // $res = array("res" => "success", "msg" => "Product sitemap updated successfully.");
        // echo json_encode($res);
    }
    
    private function generate_product_xml($items)
    {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
    
        foreach ($items as $item) {
            $sitemap = $xml->addChild('sitemap');
            $sitemap->addChild('loc', base_url('Home/ProductDetails/' . $item->id));
        }
    
        return $xml->asXML();
    }

    public function index()
{
    // Generate the product sitemap first
    $this->generate_product_sitemap();

    // Generate XML for the sitemap index
    $xml_data = $this->generate_sitemap_index();

    // Write XML to sitemap.xml file
    $file_path = FCPATH . 'sitemap.xml';
    file_put_contents($file_path, $xml_data);
    header('Content-Type: application/json');
    $res = array("res" => "success", "msg" => "Sitemap updated successfully.");
    echo json_encode($res);
}

private function generate_sitemap_index()
{
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></sitemapindex>');

    // Add static sitemaps
    $static_sitemaps = [
        base_url('sitemap_static1.xml'),
        base_url('sitemap_static2.xml'),
        base_url('sitemap_static3.xml'),
        // Add more static sitemap URLs as needed
    ];

    foreach ($static_sitemaps as $sitemap_url) {
        $sitemap = $xml->addChild('sitemap');
        $sitemap->addChild('loc', htmlspecialchars($sitemap_url));
    }

    // Add product sitemap
    $sitemap = $xml->addChild('sitemap');
    $sitemap->addChild('loc', base_url('product_sitemap.xml'));

    return $xml->asXML();
}



    
}

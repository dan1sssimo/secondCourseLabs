using System;
using System.Collections.Generic;
using System.Drawing;
using System.Text;
using System.Linq;

namespace SetLibrary
{
    public class Graph
    {
        public List<GraphVertex> Vertices { get; }

        public Graph()
        {
            Vertices = new List<GraphVertex>();
        }

        public void AddVertex(string vertexName, Rectangle rectangle)
        {
            Vertices.Add(new GraphVertex(vertexName, rectangle));
        }
        
        public void RemoveVertex(GraphVertex vertex)
        {
            foreach (var vrt in Vertices)
            {
                if (vrt != vertex)
                {
                    var edges = vrt.Edges.FindAll(e => e.ConnectedVertex == vertex);

                    foreach(var edge in edges)
                        vrt.RemoveEdge(edge);
                }
            }


            Vertices.Remove(vertex);
        }

        public GraphVertex FindVertex(string vertexName)
        {
            foreach (var v in Vertices)
            {
                if (v.Name.Equals(vertexName))
                {
                    return v;
                }
            }

            return null;
        }

        public GraphVertex FindVertex(Point position)
        {
            foreach (var v in Vertices)
            {
                if (v.Rectangle.X - v.Rectangle.Width / 2 < position.X && v.Rectangle.X + v.Rectangle.Width / 2 > position.X &&
                    v.Rectangle.Y - v.Rectangle.Height / 2 < position.Y && v.Rectangle.Y + v.Rectangle.Height / 2 > position.Y)
                {
                    return v;
                }
            }

            return null;
        }

        public void AddEdge(string firstName, string secondName, int weight)
        {
            var v1 = FindVertex(firstName);
            var v2 = FindVertex(secondName);
            if (v2 != null && v1 != null)
            {
                v1.AddEdge(v2, weight);
                v2.AddEdge(v1, weight);
            }
        }
    }
}
